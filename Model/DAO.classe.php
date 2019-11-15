<?php
 class DAO{
   private $db;

   public function __construct($path){
     $database = 'sqlite:'.$path.'/data.db';
      try{
        $this->db= new PDO($database,'','');
      }

      catch (PDOException $e){
        die("erreur de connexion:".$database."--".$e->getMessage());
      }
   }

   public function getAdherentParNom(string $nom): array() {
     $reponse=$this->db->query("SELECT * FROM ADHERENT WHERE Nom LIKE '%$nom' ");
     $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Adherent");
     if(count($donnees)>1) {
       for(int $i=0; $i<count($donnees); $i++) {
         $adherent[$i] = $donnees[$i];
       }
       return $adherent[];
     }
     else if(count($donnees) == 0) {
       printf("Aucun adherent avec ce nom");
     } else {
       $adherent[]= $donnees[0];
       return $adherent[];
     }
   }
}

public function getAdherentParId(int $id): Adherent {
  $reponse=$this->db->query("SELECT * FROM ADHERENT WHERE id=$id ");
  $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Adherent");
  if(count($donnees)>1) {
    printf("Plusieurs adherents avec cet id");
  }
  else if(count($donnees) == 0) {
    printf("Aucun adherent avec cet id");
  } else {
    $adherent= $donnees[0];
  }
  return $adherent;
 }
}



?>
