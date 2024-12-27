<?php
require_once "MainModel.class.php";
class PackagesModel extends MainModel{

    private $table = "packages";
    public function AffichePackage(){
        return $this->read($this->table);
    }

    public function DeletePackage($id){
        $this->delete($this->table, ["id"=>$id]);
    }
}
