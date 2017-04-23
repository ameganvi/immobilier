<?php

/*
Ce model gère toutes les connexions à la base de données liées à l'utilisateur
de l'agence immobilière
*/
include_once('connexionBdModel.php');


//Connecte un utilisateur à partir des ses données de connexion fournies
function seConnecter($donneesUser){

  $peutSeConnecter = false ;

  $dbh = getConnexion();

  $requette ="SELECT count(*) as total FROM utilisateur WHERE UTIPSEUDO=:login  AND UTIPASSWORD=:password";
  $stm = $dbh->prepare($requette);
  $stm->bindValue(':login',htmlspecialchars($donneesUser['login']), PDO::PARAM_STR);
  $stm->bindValue(':password', htmlspecialchars($donneesUser['password']), PDO::PARAM_STR);
  $stm->execute();

  $reponse = $stm->fetchAll();

 //Test de l'existence d'un utilisateur
 $total = $reponse[0]['total'];
 if($total != 0)
  $peutSeConnecter = true ;

  return $peutSeConnecter;

}


//Récupérer les informations d'un utilisateur à partir de ses donnnées fournies
function getUser($donneesUtilsateur){

}





?>
