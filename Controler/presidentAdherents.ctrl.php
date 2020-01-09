<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.classe.php");




if(isset($_GET["login"]) ){
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

} else {
	$view= new View("../View/signin.ctrl.php");
	//$view->list=$list;
	$view->show();
}






?>
