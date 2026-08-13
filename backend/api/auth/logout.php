<?php
// ============================================================
//  API: Logout (POST)
//  URL: /backend/api/auth/logout.php
// ============================================================
require_once '../../config/helpers.php';
require_once '../../config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJSON(["success" => false, "message" => "Method not allowed."], 405);
}

$headers = getallheaders();
$auth    = $headers['Authorization'] ?? $headers['authorization'] ?? '';
$token   = str_replace('Bearer ', '', $auth);

if (!$token) {
    sendJSON(["success" => false, "message" => "No token provided."], 401);
}

$db   = new Database();
$conn = $db->getConnection();

$stmt = $conn->prepare("DELETE FROM user_sessions WHERE token = :token");
$stmt->execute([':token' => $token]);

sendJSON(["success" => true, "message" => "Logged out successfully."]);
?>
