<?php
    class Match{
      private $idmatch;
      private $lieu;
      private $date;
      private $arbitre;
      private $heure;
      private $categorie;

      public function getId(){
        return $this->idmatch;
      }

      public function getLieu(){
        return $this->lieu;
      }

      public function getDate(){
        return $this->date;
    }

    public function getHeure(){
      return $this->heure;
    }

    public function getArbitre(){
      return $this->arbitre;
    }

    public function getCategorie(){
      return $this->categorie;
    }

  }

 ?>
