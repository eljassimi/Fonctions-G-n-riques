<?php
require_once "MainController.class.php";

class packageController extends MainController{

      public function affiche(){
        $packages = $this->Display();
        require_once "view/Displaypackages.php";
      }
      public  function DeletePackage($id){
        $this->DeletePack($id);
        header("location: index.php");
      }

}