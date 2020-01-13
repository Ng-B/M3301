<?php
  class ContactParent{
    private $telpere;
    private $telmere;
    private $fixepere;
    private $fixemere;
    private $id;

    public function getTelPere(){
      return $this->telpere;
    }

    public function getFixePere(){
      return $this->fixepere;
    }

    public function getTelMere(){
      return $this->telmere;
    }

    public function getFixeMere(){
      return $this->fixemere;
    }

    public function setFixePere(int $nom){
      $this->fixePere=$nom;
    }
    public function setFixeMere(int $nom){
      $this->fixeMere=$nom;
    }
    public function setTelMere(int $nom){
      $this->telMere=$nom;
    }
    public function setTelPere(int $nom){
      $this->telPere=$nom;
    }
    public function setId(int $nom){
      $this->id=$nom;
    }

  }


 ?>
