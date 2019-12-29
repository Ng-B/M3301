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

if(isset($_GET["login"]) ){
	$myPDO = new DAO();
	$adherents= $myPDO->get_All_Adherent();
		if(is_null($adherents) ){
			$view= new View("../View/presidentAdherents.View.php");
			$view->no_adherents=true;
			$view->show();
			} else {
				$view= new View("../View/presidentAdherents.View.php");
				$view->adherents=$adherents;
				$view->show();

			}

} else {
	$view= new View("../View/signin.ctrl.php");
	//$view->list=$list;
	$view->show();
}






?>
