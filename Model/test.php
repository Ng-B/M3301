<?php
require_once('Adherent.class.php');
require_once('DAO.classe.php');
// Récupération des données de configuration

/*
// Creation de l'instance DAO
$myPDO = new DAO();
$m = $myPDO->getAdherentParId(45);
print($m->getNom());*/

/*$myPDO = new DAO();
$m = $myPDO->getAdherentParLogin('fabryd');
print($m->getNom());*/

$myPDO = new DAO();
$m = $myPDO->estMembreDuBureau(928);
print($m);
?>
