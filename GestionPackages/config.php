<?php
class Database {
    private $host = "localhost";
    private $db_name = "gestion_packages";
    private $username = "root";
    private $password = "";
    public $db;
       
    public function getConnection() {
        $this->db = null;
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name}";
            $this->db = new PDO($dsn, $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }
        return $this->db;
    }
}
?>
