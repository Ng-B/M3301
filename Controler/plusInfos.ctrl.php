<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.class.php");
include("../Model/ContactParents.class.php");



if(isset($_GET["login"]) ){
	$myPDO = new DAO();
	$adherent= $myPDO->getAdherentParLogin($_GET["login"]);
	$current_login=$_GET["login"];
		if(is_null($adherent)){
			$view= new View("../View/signin.View.php");
			//$view->list=$list;
			$view->show();
			} else {
				$view= new View("../View/plusInfos.View.php");
				$contact=$myPDO->getContactPourAdherent($adherent->getId());
				$view->adherent=$adherent;
				$view->contact=$contact;
				$view->current_login=$current_login;
				$view->show();
			}

} else {
	$view= new View("../View/signin.View.php");
	//$view->list=$list;
	$view->errorLogin=true;
	$view->show();
}

?>
