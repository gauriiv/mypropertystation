<?php
// ============================================================
//  API: Signup (POST)
//  URL: /backend/api/auth/signup.php
// ============================================================
require_once '../../config/helpers.php';
require_once '../../config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJSON(["success" => false, "message" => "Method not allowed."], 405);
}

$data = json_decode(file_get_contents("php://input"), true);

// --- Validate input ---
$full_name = trim($data['full_name'] ?? '');
$email     = trim($data['email']     ?? '');
$phone     = trim($data['phone']     ?? '');
$password  = trim($data['password']  ?? '');
$confirm   = trim($data['confirm_password'] ?? '');

if (!$full_name || !$email || !$phone || !$password || !$confirm) {
    sendJSON(["success" => false, "message" => "All fields are required."], 422);
}
if (!validateEmail($email)) {
    sendJSON(["success" => false, "message" => "Invalid email address."], 422);
}
if (!validatePhone($phone)) {
    sendJSON(["success" => false, "message" => "Enter a valid 10-digit Indian mobile number."], 422);
}
if (strlen($password) < 8) {
    sendJSON(["success" => false, "message" => "Password must be at least 8 characters."], 422);
}
if ($password !== $confirm) {
    sendJSON(["success" => false, "message" => "Passwords do not match."], 422);
}

// --- DB Connection ---
$db   = new Database();
$conn = $db->getConnection();

// --- Check existing email ---
$stmt = $conn->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
$stmt->execute([':email' => $email]);
if ($stmt->rowCount() > 0) {
    sendJSON(["success" => false, "message" => "An account with this email already exists."], 409);
}

// --- Insert user ---
$hashed = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
$insert = $conn->prepare(
    "INSERT INTO users (full_name, email, phone, password) VALUES (:name, :email, :phone, :password)"
);
$insert->execute([
    ':name'     => htmlspecialchars($full_name),
    ':email'    => $email,
    ':phone'    => $phone,
    ':password' => $hashed,
]);

sendJSON([
    "success" => true,
    "message" => "Account created successfully! Please log in.",
], 201);
?>
