<?php
class Adherent{
  private $id;
  private $nom;
  private $prenom;
  private $datenaissance;
  private $sexe;
  private $telperso;
  private $login;
  private $password;
  private $numlicense;
  private $validation;
  private $montant;
  private $mail;

  public function getNom(){
    return $this->nom;
  }

  public function getId(){
    return $this->id;
  }

  public function getPrenom(){
    return $this->prenom;
  }

  public function getDateNaissance(){
    return $this->datenaissance;
  }

  public function getSexe(){
    return $this->sexe;
  }

  public function getLogin(){
    return $this->login;
  }

  public function getPassword()  {
    return $this->password;
  }

  public function getTelephone() {
    return $this->telperso;
  }

  public function getMail() {
    return $this->mail;
  }

  public function getNumLicense(){
    return $this->numlicense;
  }


  public function setNom(string $nom){
    $this->nom=$nom;
  }

  public function setId(int $id){
    $this->id=$id;
  }

  public function setPrenom(string $prenom){
    $this->prenom=$prenom;
  }

  public function setDateNaissance(string $dateNaissance){
    $this->dateNaissance=$dateNaissance;
  }

  public function setSexe(string $sexe){
    $this->sexe=$sexe;
  }

  public function setTelephone(string $telephone){
    $this->telephone=$telephone;
  }
}

  ?>
