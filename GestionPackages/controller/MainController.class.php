<?php
require_once "model/PackagesModel.class.php";

class MainController {
       
    private $package;
    public function __construct() {
        $this->package = new PackagesModel();
    }

    public function Display(){
        return $this->package->AffichePackage();
    }

    public function DeletePack($id){
        $this->package->DeletePackage($id);
    }

}