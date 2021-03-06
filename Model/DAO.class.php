<?php
require_once("Match.class.php");
require_once("Adherent.class.php");
require_once("Bureau.class.php");
require_once("ContactParent.class.php");



 class DAO{
   private $db;

   public function __construct(){
     //$myPDO = new PDO('pgsql:host=localhost;dbname=projet', 'nn', 'nn');
     $myPDO = new PDO('pgsql:host=localhost;port=5432;dbname=HandBase;user=postgres;password=openthegates');

      try{
        $this->db= $myPDO;
        $this->db->query("set datestyle to european ;");
      }

      catch (PDOException $e){
        die("erreur de connexion:".$myPDO."--".$e->getMessage());
      }
   }

   //--------------------------------ADHERENT----------------------------------//
   public function getAdherentParNom(string $nom) {
     $reponse=$this->db->query("SELECT * FROM ADHERENT WHERE Nom LIKE '%$nom' ");
     $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Adherent");
     if(count($donnees)>1) {
       for( $i=0; $i<count($donnees); $i++) {
         $adherent[$i] = $donnees[$i];
       }
       return $adherent ;
     }
     else if(count($donnees) == 0) {
       printf("Aucun adherent avec ce nom");
     } else {
       $adherent[]= $donnees[0];
       return $adherent;
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
    return $adherent;
  }
 }


public function getAdherentParDateNaissance(string $date /*pas de variable date*/): array {
  $reponse=$this->db->query("SELECT * FROM ADHERENT WHERE dateDeNaissance=$date ");
  $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Adherent");
  if(count($donnees)>1) {
    for( $i=0; $i<count($donnees); $i++) {
      $adherent[$i] = $donnees[$i];
    }
    return $adherent;
  }
  else if(count($donnees) == 0) {
    printf("Aucun adherent avec cette date de naissance");
  } else {
    $adherent= $donnees[0];
    return $adherent;
  }
 }

 public function getNombreTotalAdherents() : int {
   $total=$this->db->query("SELECT count(*) FROM ADHERENT ");
   $donnees=$total-> fetchAll(PDO::FETCH_CLASS,"Adherent");
   return count($donnees);
 }

 public function getAdherentParLogin(string $login) {
   $reponse=$this->db->query("SELECT * FROM ADHERENT WHERE login='$login' ");
   $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Adherent");
   if(count($donnees) != 0) {
     $adherent= $donnees[0];
     return $adherent;
   }
  }

  public function get_All_Adherent() {
    $reponse=$this->db->query("SELECT * FROM ADHERENT ");
    $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Adherent");
    if(count($donnees) == 0) {
      print("Aucun adherent " );
    } else {
      for ($i=0; $i<count($donnees); $i++){
        $adherents[$i]= $donnees[$i];
      }
      return $adherents;
    }
   }

   public function isPresent_email(string $email) {
     $reponse=$this->db->query("SELECT * FROM ADHERENT WHERE mail='$email' ");
     $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Adherent");
     if(count($donnees) == 0) {
       printf("Aucun adherent avec cette date de naissance");
     } else {
       $adherent= $donnees[0];
       return $adherent;
     }
    }

 //--------------------------------JOUEUR----------------------------------//
 public function getJoueurParID(int $id): Joueur {
   $reponse=$this->db->query("SELECT * FROM Joueur WHERE idAdh=$id ");
   $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Joueur");
   if(count($donnees)>1) {
     printf("Plusieurs joueurs avec cet id");
   }
   else if(count($donnees) == 0) {
     printf("Aucun jooueur avec cet id");
   } else {
     $joueur= $donnees[0];
     return $joueur;
   }
  }

//--------------------------------ENTRAINEUR----------------------------------//
  public function getEntraineurParID(int $id): Entraineur {
    $reponse=getPDO()->query("SELECT * FROM Entraineurs WHERE idAdh=$id ");
    $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Entraineurs");
    if(count($donnees)>1) {
      printf("Plusieurs entraineurs avec cet id");
    }
    else if(count($donnees) == 0) {
      printf("Aucun entraineur avec cet id");
    } else {
      $entraineur= $donnees[0];
      return $entraineur;
    }
  }

  //--------------------------------BUREAU----------------------------------//
    public function getBureauParID(int $id): Bureau {
      $reponse=$this->db->query("SELECT * FROM Bureau WHERE idAdh=$id ");
      $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Bureau");
      if(count($donnees)>1) {
        printf("Plusieurs bureaux avec cet id");
      }
      else if(count($donnees) == 0) {
        printf("Aucun bureaux avec cet id");
      } else {
        $entraineur= $donnees[0];
        return $entraineur;
      }
    }

    //--------------------------------LICENSE----------------------------------//
      public function getLicenseParID(int $id): License {
        $reponse=$this->db->query("SELECT * FROM License WHERE idAdh=$id ");
        $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"License");
        if(count($donnees)>1) {
          printf("Plusieurs licenses avec cet id");
        }
        else if(count($donnees) == 0) {
          printf("Aucun license avec cet id");
        } else {
          $license= $donnees[0];
          return $license;
        }
      }

      //--------------------------------CONTACT----------------------------------//
        public function getContactParMail(string $mail): Contact {
          $reponse=$this->db->query("SELECT * FROM Contact WHERE mail=$mail ");
          $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Contact");
          if(count($donnees)>1) {
            printf("Plusieurs contacts avec cet mail");
          }
          else if(count($donnees) == 0) {
            printf("Aucun contact avec cet mail");
          } else {
            $contact= $donnees[0];
            return $contact;
          }
        }


        public function getContactParent( $tel1, $tel2): bool {
          return $this->db->query("SELECT * FROM Contact WHERE telPere=$tel1 AND telMere=$tel2 ");

        }



        //--------------------------------EQUIPE----------------------------------//
          public function getEquipeParId(string $id): Equipe {
            $reponse=$this->db->query("SELECT * FROM Equipe WHERE id=$id ");
            $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Equipe");
            if(count($donnees)>1) {
              printf("Plusieurs equipes avec cet id");
            }
            else if(count($donnees) == 0) {
              printf("Aucune equipe avec cet id");
            } else {
              $equipe= $donnees[0];
              return $equipe;
            }
          }

    //--------------------------MATCHS----------------------------------------//
          public function getMatchsPasses(string $login) {
            $reponse=$this->db->query("SELECT M.idmatch,M.lieu,M.date,M.arbitre,M.heure,M.categorie FROM match M, estselectionne E WHERE E.idjoueur=(SELECT id FROM adherent WHERE login='$login') AND  E.idmatch=M.idmatch AND M.date < CURRENT_DATE ");
            $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Match");
            for ($i=0; $i<count($donnees); $i++){
              $matchs[$i]= $donnees[$i];
            }
              return $matchs;

          }

          public function getMatchsVenir(string $login) {
            $reponse=$this->db->query("SELECT M.idmatch,M.lieu,M.date,M.arbitre,M.heure,M.categorie FROM match M, estselectionne E WHERE E.idjoueur=(SELECT id FROM adherent WHERE login='$login') AND  E.idmatch=M.idmatch AND M.date >= CURRENT_DATE ");
            $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Match");
            for ($i=0; $i<count($donnees); $i++){
              $matchs[$i]= $donnees[$i];
            }
              return $matchs;

          }

          public function estMembreDuBureau(int $id)  {
            $reponse=$this->db->query("SELECT * FROM bureau WHERE idhadh= $id");
            $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Bureau");
            if(count($donnees)==0){
              return false;
            } else {
              return true;
            }
          }

          public function ajoutAdherent($nom, $prenom, $dateNaissance, $sexe, $telperso,$mail,$tel1,$tel2,$tel3,$tel4,$joueur,$bureau,$entraineur,$categorie){
            $contactparent=$this->getContactParent($tel1,$tel2);
            if (!$contactparent){
            $this->db->query("INSERT INTO contactparent VALUES ($tel1,$tel2,$tel3,$tel4,(SELECT MAX(id)+1 FROM contactparent ))");
            }
            if(isset($tell1) && isset($tell2)){
            $this->db->query("INSERT INTO ADHERENT VALUES ((SELECT MAX(id)+1 FROM ADHERENT ), '$nom', '$prenom', $dateNaissance, '$sexe',$telperso,'$prenom.$nom','$nom.$dateNaissance',NULL,'$typelicense',false,00.0,$mail,(SELECT id FROM Contact WHERE telpere=$tel1 AND telmere=$tel2 )");
          }
          if($joueur){

            $this->db->query("INSERT INTO Joueurs VALUES ((SELECT MAX(id) FROM ADHERENT),'-9',0,0,0,false)");
          }
          if($entraineur){
            $this->db->query("INSERT INTO Entraineur VALUES ((SELECT MAX(id) FROM ADHERENT),$categorie)");
          }
          if($bureau!="aucun"){
            $this->db->query("INSERT INTO Bureau VALUES ((SELECT MAX(id) FROM ADHERENT),$bureau)");
          }
        }

          public function getAdherentParMail(string $mail) {
            $reponse=$this->db->query("SELECT * FROM ADHERENT WHERE mail='$mail' ");
            $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Adherent");
            if(count($donnees) == 0) {
              printf("Aucun adherent avec ce mail");
            } else {
              $adherent= $donnees[0];
              return $adherent;
            }
           }

           public function getAllMatchsVenir() {
             $reponse=$this->db->query("SELECT M.idmatch,M.lieu,M.date,M.arbitre,M.heure,M.categorie FROM match M WHERE M.date >= CURRENT_DATE ");
             $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Match");
             for ($i=0; $i<count($donnees); $i++){
               $matchs[$i]= $donnees[$i];
             }
               return $matchs;

           }

           public function getContactPourAdherent(int $id) {
             $reponse=$this->db->query("SELECT * FROM ContactParent WHERE id=$id ");
             $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"ContactParent");
             if(count($donnees)>1) {
               print("Plusieurs contacts pour cet id");
             }
             else if(count($donnees) == 0) {
               print("Aucun contact pour cet id");
             } else {
               $contact= $donnees[0];
               return $contact;
             }

           }
}
?>
