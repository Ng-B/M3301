<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

//require_once("../Model/Adherent.class.php");
include("../Model/DAO.class.php");



//---------------------------------------------Tri par prix, méthode TRIX PAR BULLE-------------------------------------//
$view= new View("../View/lesmatchs.View.php");
//$view->list=$list;
$view->show();






?>
