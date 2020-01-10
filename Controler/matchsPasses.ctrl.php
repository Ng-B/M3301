<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.class.php");




if(isset($_GET["login"]) ){
	$myPDO = new DAO();
	$matchs= $myPDO->getMatchsPasses($_GET["login"]);
	$current_login=$_GET["login"];
		if(is_null($matchs)){
			$view= new View("../View/matchsPasses.View.php");
			$view->aucun_match_passe=true;
			$view->current_login=$current_login;
			//$view->list=$list;
			$view->show();

			} else {
				$view= new View("../View/matchsPasses.View.php");
				//$view->list=$list;
				$view->les_matchs_passes=$matchs;
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
