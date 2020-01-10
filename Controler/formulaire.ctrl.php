<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.classe.php");

$view= new View("../View/formulaire.View.php");
$current_login=$_GET["login"];
$view->current_login=$current_login;

$view->show();
?>
