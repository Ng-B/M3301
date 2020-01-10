<?php
require_once('ContactParent.class.php');
require_once('Adherent.class.php');
require_once('DAO.class.php');
// Récupération des données de configuration

/*
// Creation de l'instance DAO
$myPDO = new DAO();
$m = $myPDO->getAdherentParId(5);
print($m->getLogin());*/

/*$myPDO = new DAO();
$m = $myPDO->getAdherentParLogin('fabryd');
print($m->getNom());*/
/*
$myPDO = new DAO();
$m = $myPDO->estMembreDuBureau(928);
print($m);
*/

$myPDO = new DAO();
$m = $myPDO->getContactPourAdherent(5);

  print($m->getFixeMere());



?>
