<?php
class Database {
    private $host = "localhost";
    private $db_name = "ql_nhansu";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            die("Lỗi kết nối: " . $exception->getMessage());
        }
        return $this->conn;
    }
}
?>
