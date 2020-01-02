<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.classe.php");


// Creation de l'instace DAO
/*
$adherents = new DAO("/users/info/etu-s3/bekelen/public_html/M3301/Model/data");
$NTA=$adherents->getNombreTotalAdherents();
echo $NTA;
  for($i=1;$i<7;$i++){
      // Récupération de tous les objets Music
      $m = $adherents->getAdherentParId($i);
      // Ajout à la liste des telephones à afficher
      $list[$i] = $m;
    }
*/
//---------------------------------------------Tri par prix, méthode TRIX PAR BULLE-------------------------------------//

$view= new View("../View/indexP.View.php");
//$view->list=$list;
$view->errorLogin=false;
$view->current_user=$_GET["login"];
$view->show();








?>
