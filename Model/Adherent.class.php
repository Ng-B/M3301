<?php
class Adherent{
  private $id;
  private $nom;
  private $prenom;
  private $dateNaissance;
  private $sexe;
  private $telephone;
}

public function getNom(): string{
  return $nom;
}

public function getId(): int{
  return $id;
}

public function getPrenom(): string{
  return $prenom;
}

public function getDateNaissance(): string{
  return $dateNaissance;
}

public function getSexe(): string{
  return $sexe;
}

public function getTelephone(): string{
  return $telephone;
}

public function setNom(string $nom){
  $this->nom=$nom;
}

public function setId(int $id){
  $this->id=$id;
}

 ?>
