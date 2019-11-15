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

   public function get(int $id): Music {
     $reponse=$this->db->query("SELECT * FROM music WHERE id=$id  ");
     $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Music");
     $musique= $donnees[0];
     return $musique;
   }
}





?>
