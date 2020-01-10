<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.class.php");




if(isset($_GET["login"]) ){
	$myPDO = new DAO();
	$matchs= $myPDO->getMatchsVenir($_GET["login"]);
	$current_login= $_GET["login"];
		if(is_null($matchs)){
			$view= new View("../View/matchsVenir.View.php");
			$view->aucun_match_venir=true;
			$view->current_login=$current_login;
			//$view->list=$list;
			$view->show();

			} else {
				$view= new View("../View/matchsVenir.View.php");
				//$view->list=$list;
				$view->les_matchs_venir=$matchs;
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
