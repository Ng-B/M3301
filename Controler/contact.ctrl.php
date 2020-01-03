<?php

	if(isset($_POST["email"]) && isset($_POST["message"])){
	$to = "vaillante.chatillonnaise@gmail.com";
	$subject = "NOUVELLE QUESTION";
	if(isset($_POST["name"])){
		$txt = "Message de ".$_POST["name"]."----- Email- ".$_POST["email"]."-----\n".$_POST["message"];
	} else {
		$txt =  "Email- ".$_POST["email"]."-----\n".$_POST["message"];
	}
	$headers = "From: vaillante.chatillonnaise@gmail.com";

	if(mail($to,$subject,$txt,$headers)){
	  echo "Message envoye. Retourner a la page d'acceuil";
	} else {
		echo "Echec message. Essayez ulterieurement. Verifie toutes les cases remplis";
	}
}
?>
