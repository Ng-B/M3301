<?php
require_once("../Framework/view.class.php");
// Récupération des données de configuration

require_once("../Model/Adherent.class.php");
include("../Model/DAO.class.php");


if(isset($_POST["email"])){
	$myPDO = new DAO();
	$m = $myPDO->isPresent_email($_POST["email"]);
		if(is_null($m)){
			$view= new View("../View/forgot.View.php");
			$view->confirmationSent=false;
			$view->errorMail=true;
			//$view->list=$list;
			$view->show();
		} else {
			$to = $m->getMail();
			$subject = "REINITIALISATION DE MOT DE PASSE";
		  $txt = "Voici votre mot de passe pour votre compte : ".$m->getPassword()." \n \n Si vou n'avez pas demande votre mot de passe cela signifie que quelqu'un essaye d'avoir acces a votre compte. Veuillez le securiser en ne partageant pas votre mot de passe. ";
			$headers = "From: vaillante.chatillonnaise@gmail.com";

			if(mail($to,$subject,$txt,$headers)) {
				$view= new View("../View/forgot.View.php");
				//$view->list=$list;
				$view->confirmationSent=true;
				$view->errorMail=false;
				$view->show();
			}else{
				$view= new View("../View/forgot.View.php");
				//$view->list=$list;
				$view->confirmationSent=false;
				$view->errorMail=false;
				$view->show();
			}

		}
} else {
	$view= new View("../View/forgot.View.php");
	//$view->list=$list;
	$view->errorMail=false;
	$view->show();
}








?>
