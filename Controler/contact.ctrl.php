<?php

$rer="php mail.php";

	$to = "naodg66@gmail.com";
	$subject = "My subject";
	$txt = "Frwdwdwddedede";
	$headers = "From: vaillante.chatillonnaise@gmail.com";
	$r=mail($to,$subject,$txt,$headers);
	echo $r;
	shell_exec($rer);
  echo "Message envoye. Return to homepage";


?>
