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
   
}





?>
