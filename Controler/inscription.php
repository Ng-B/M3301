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

<<<<<<< HEAD

=======
echo "$lastname";
echo "$firstname";
echo "$date";
echo "$gender";
echo "$phone";
echo "$mail";
echo "$joueur";
echo "$entraineur";
echo "$categorie";
echo "$bureau";
echo "$phoneP";
echo "$phonePF";
echo "$phoneM";
echo "$phoneMF";
>>>>>>> e5ec1e61dc4b59c8b586686c1920828f842032c1
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
  }*/

<<<<<<< HEAD
//include "presidentAdherents.ctrl.php";
=======
>>>>>>> e5ec1e61dc4b59c8b586686c1920828f842032c1
 ?>
