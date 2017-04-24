<?php

/*
 Les fonctions du models interagissent avec la bas de données pour mettre
 à jour les données
*/

include_once('connexionBdModel.php');//Fonction contenant la connexion à la base de données


// Fonction pour se connecter à la base de donnée
function connexionBd(){

  $bdConnexion = getConnexion();
  return $bdConnexion ;

}

//Fonction pour récupérer toutes les annonces à afficher sur le site
function getAllAnnonces(){

}

//la fonction prend en paramètre l'identifiant d'une annonce et le modifie
function updateAnnonce($idAnnonce, $donneesAnnonce){

}

//La fonction prend en paramètre l'identifiant d'une annonce et la supprime
function deleteAnnonce($idAnnnonce){

}

//cette fonction prend en paramètre les données d'une annonce et l'ajoute
function addAnnonce($donneesAnnonce){

}


//cette fonction affiche les annonces
function afficherAnnonce($donneesAnnonce){

}

?>
