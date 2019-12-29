<?php
require_once('Adherent.class.php');
require_once('DAO.classe.php');
// Récupération des données de configuration

/*
// Creation de l'instace DAO
$myPDO = new DAO();
$m = $myPDO->getAdherentParId(45);
print($m->getNom());*/

/*$myPDO = new DAO();
$m = $myPDO->getAdherentParLogin('fabryd');
print($m->getNom());*/

$myPDO = new DAO();
$m = $myPDO->getMatchsPasses('KamalLag');
print($m[0]->getLieu());
?>
