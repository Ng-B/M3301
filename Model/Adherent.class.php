<?php
class Adherent{
  private $id;
  private $nom;
  private $prenom;
  private $dateNaissance;
  private $sexe;
  private $telperso;
  private $login;
  private $password;
  private $numlicense;
  private $validation;
  private $montant;
  private $mail;

  public function getNom(): string{
    return $this->nom;
  }

  public function getId(): int{
    return $this->id;
  }

  public function getPrenom(): string{
    return $this->prenom;
  }

  public function getDateNaissance(): string{
    return $this->dateNaissance;
  }

  public function getSexe(): string{
    return $this->sexe;
  }

  public function getPassword(): string {
    return $this->password;
  }

  public function getTelephone(): string{
    return $this->telephone;
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
