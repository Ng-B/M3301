<?php
    class Dispo{
      private $idAdh;
      private $idMatch;
      private $peutEmmene;
      private $estEmmene;
      private $placeDispos;

      public function getIdAdh(){
        return $idAdh;
      }

      public function getIdMatch(){
        return $idMatch;
      }

      public function isPeutEmmene(){
        return $peutEmmene;
      }

      public function isEstEmmene(){
        return $estEmmene;
      }

      public function getPlaceDispos(){
        return $placeDispos;
      }
    }

 ?>
