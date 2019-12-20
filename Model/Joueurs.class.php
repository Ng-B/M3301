<?php
  class Joueurs{
    private $nbButs;
    private $nbTirs;
    private $nbLavages;
    private $categorie;
    private $arbitre;
    private $idAdh;

    public function getNbButs(){
      return $nbButs;
    }

    public function getNbTirs(){
      return $nbTirs;
    }

    public function getNbLavages(){
      return $nbLavages;
    }

    public function getCategories(){
      return $categories;
    }

    public function isArbitre(){
      return $arbitre;
    }

    public function getIdAdh(){
      return $idAdh;
    }

  }


 ?>
