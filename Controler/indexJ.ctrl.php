<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.classe.php");




$view= new View("../View/indexJ.View.php");
//$view->list=$list;
$view->errorLogin=false;
$view->current_user=$_GET["login"];
$view->show();








?>
