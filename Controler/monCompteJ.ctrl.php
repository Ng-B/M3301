<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.classe.php");


if(isset($_GET["login"]) ){
	$myPDO = new DAO();
	$adherent= $myPDO->getAdherentParLogin($_GET["login"]);
		if(is_null($adherent)){
			$view= new View("../View/signin.View.php");
			//$view->list=$list;
			$view->show();
			} else {
				$view= new View("../View/monCompteJ.View.php");
				//$view->list=$list;
				$view->adherent=$adherent;
				$view->show();
			}

} else {
	$view= new View("../View/signin.View.php");
	//$view->list=$list;
	$view->show();
	echo "miawww5";
}






?>
