
<?php
require_once "config.php";

class MainModel {

   private $db;

   public function __construct() {
    $database = new Database();
    $this->db = $database->getConnection();
   }

   public function read($table ,$condition = []){
    $sql = "SELECT * FROM {$table}";
    if (!empty($condition)){
        $where = [];
        foreach ($condition as $key => $value){
            $where[] = "{$key} = :{$key}";
        }
        $sql .= " WHERE ".implode(" AND ",$where);
        }
        $stmt = $this->db->prepare($sql);
        $stmt->execute($condition);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
   }

   public function delete($table ,$condition){
    $where = [];
    foreach ($condition as $key => $value){
        $where[] = "{$key} = :{$key}";
    }
    $sql = "DELETE FROM {$table} WHERE ".implode( ' AND ',$where);
    $stmt = $this->db->prepare($sql);
    $stmt->execute($condition);
   }
}