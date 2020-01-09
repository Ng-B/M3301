<?php

session_start();
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.classe.php");

if(isset($_POST["login"]) && isset($_POST["password"])){
	$myPDO = new DAO();
	$m = $myPDO->getAdherentParLogin($_POST["login"]);
		if(is_null($m)){
			$view= new View("../View/signin.View.php");
			$view->errorLogin=true;
			//$view->list=$list;
			$view->show();
		} else {
			  if($m->getPassword()== $_POST["password"]){
					//$view->list=$list;
					if($myPDO->estMembreDuBureau($m->getId()) == true){
						$view= new View("../View/indexP.View.php");
						$view->errorLogin=false;
						$view->current_user=$_POST["login"];
						$_SESSION['user_id']=$_POST["login"];
						$view->show();
					} else {
					$view= new View("../View/indexJ.View.php");
					$view->errorLogin=false;
					$view->current_user=$_POST["login"];
					$_SESSION['user_id']=$_POST["login"];
					$view->show();
				}
				} else {
					$view= new View("../View/signin.View.php");
					$view->errorLogin=true;
					//$view->list=$list;
					$view->show();
				}

		}
} else {

	session_unset();
	// destroy the session
	session_destroy();

	$view= new View("../View/signin.View.php");
	//$view->list=$list;
	$view->errorLogin=false;
	$view->show();
}








?>
