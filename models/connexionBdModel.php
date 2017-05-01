<?php
//Connexion à la base de données

function getConnexion(){
  //Paraètres de connexion
  $dbName ="immohayibo";
  $dbPassword ="toor";
  $dbUser="root";

  //Connexion proprement dite à la base de donnée
  try{

       $db = new PDO('mysql:host=localhost;dbname='.$dbName, $dbUser, $dbPassword);
       return $db ;
  }catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }

}


 ?>
