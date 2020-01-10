<?php
include_once("../Model/DAO.class.php");
include_once("../Framework/view.class.php");

$lastname=$_POST["firstname"];
$firstname=$_POST["lastname"];
$date=$_POST["date"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];
$joueur=$_POST["joueur"];
$entraineur=$_POST["entraineur"];
$categorie=$_POST["categorie"];
$bureau=$_POST["bureau"];
$phoneP=$_POST["phoneP"];
$phonePF=$_POST["phonePF"];
$phoneM=$_POST["phoneM"];
$phoneMF=$_POST["phoneMF"];

$bdd=new DAO();
if ($gender=="female"){
$bdd->ajoutAdherent($lastname, $firstname, $date, 1, $phone,$mail,$phoneP,$phoneM,$phonePF,$phoneMF,$joueur,$bureau,$entraineur,$categorie);
}else{
$bdd->ajoutAdherent($lastname, $firstname, $date, 0, $phone,$mail,$phoneP,$phoneM,$phonePF,$phoneMF,$joueur,$bureau,$entraineur,$categorie);
}

$myPDO = new DAO();
$adherents= $myPDO->get_All_Adherent();
  if(is_null($adherents) ){
    $view= new View("../View/presidentAdherents.View.php");
    $view->no_adherents=true;
    $view->current_login=$_GET["login"];
    $view->show();
    } else {
    $view= new View("../View/presidentAdherents.View.php");
    $view->adherents=$adherents;
    $view->current_login=$_GET["login"];
    $view->show();
  }

 ?>
