<?php
// ============================================================
//  Database Configuration — WAMP (localhost / root / no pass)
// ============================================================
class Database {
    private $host     = "localhost";
    private $db_name  = "mypropertystation_db";
    private $username = "root";
    private $password = "";       // WAMP default: no password
    private $charset  = "utf8mb4";
    public  $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
            $this->conn = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(["success" => false, "message" => "Database connection failed."]);
            exit();
        }
        return $this->conn;
    }
}
?>
