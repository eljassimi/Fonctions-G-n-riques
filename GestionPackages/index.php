<?php
require_once "controller/PackageController.class.php";
 $packageController = new packageController();
 $action = $_GET["action"]??"list";

 switch ($action) {
    case "list": $packageController->affiche(); break;
    case "delete": $packageController->DeletePackage($_GET["id"]);
 }

