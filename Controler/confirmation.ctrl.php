<?php
require_once("../Framework/view.class.php");
$view= new View("../View/formulaire.View.php");
$current_login=$_GET["login"];
$view->current_login=$current_login;

$view->lastname=$_POST["firstname"];
$view->firstname=$_POST["lastname"];
$view->date=$_POST["date"];
$view->gender=$_POST["gender"];
$view->phone=$_POST["phone"];
$view->mail=$_POST["mail"];
$view->joueur=$_POST["joueur"];
$view->entraineur=$_POST["entraineur"];
$view->categorie=$_POST["categorie"];
$view->bureau=$_POST["bureau"];
$view->phoneP=$_POST["phoneP"];
$view->phonePF=$_POST["phonePF"];
$view->phoneM=$_POST["phoneM"];
$view->phoneMF=$_POST["phoneMF"];


$view->show();
?>
