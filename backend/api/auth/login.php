<?php
// ============================================================
//  API: Login (POST)
//  URL: /backend/api/auth/login.php
// ============================================================
require_once '../../config/helpers.php';
require_once '../../config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJSON(["success" => false, "message" => "Method not allowed."], 405);
}

$data = json_decode(file_get_contents("php://input"), true);

$email    = trim($data['email']    ?? '');
$password = trim($data['password'] ?? '');

if (!$email || !$password) {
    sendJSON(["success" => false, "message" => "Email and password are required."], 422);
}
if (!validateEmail($email)) {
    sendJSON(["success" => false, "message" => "Invalid email address."], 422);
}

// --- DB Connection ---
$db   = new Database();
$conn = $db->getConnection();

// --- Fetch user ---
$stmt = $conn->prepare("SELECT id, full_name, email, phone, password, role FROM users WHERE email = :email LIMIT 1");
$stmt->execute([':email' => $email]);

if ($stmt->rowCount() === 0) {
    sendJSON(["success" => false, "message" => "No account found with this email."], 401);
}

$user = $stmt->fetch();

// --- Verify password ---
if (!password_verify($password, $user['password'])) {
    sendJSON(["success" => false, "message" => "Incorrect password. Please try again."], 401);
}

// --- Generate session token ---
$token      = bin2hex(random_bytes(32));
$expires_at = date('Y-m-d H:i:s', strtotime('+7 days'));
$ip         = $_SERVER['REMOTE_ADDR']     ?? null;
$agent      = $_SERVER['HTTP_USER_AGENT'] ?? null;

$sess = $conn->prepare(
    "INSERT INTO user_sessions (user_id, token, ip_address, user_agent, expires_at)
     VALUES (:uid, :token, :ip, :agent, :exp)"
);
$sess->execute([
    ':uid'   => $user['id'],
    ':token' => $token,
    ':ip'    => $ip,
    ':agent' => $agent,
    ':exp'   => $expires_at,
]);

// --- Return success with token & user info ---
sendJSON([
    "success" => true,
    "message" => "Login successful! Welcome back, " . $user['full_name'],
    "token"   => $token,
    "user"    => [
        "id"        => $user['id'],
        "full_name" => $user['full_name'],
        "email"     => $user['email'],
        "phone"     => $user['phone'],
        "role"      => $user['role'],
    ],
]);
?>
