<?php

// Décrire les fonctionnalités des utilisateurs

/*
 Les fonctions de ce controllers feront appels aux fonctions du models
 pour créer l'interaction avec la base de données
*/

include_once('models/annonceModel.php');

//Récupérer toutes les annonces disponibles
function getAllAnnoncesData(){
  $lesAnnonces  =  getAllAnnonces();

  return $lesAnnonces;
}

//Modifier une annonce précise
function updateAnonnceData($idAnnonce, $donneesAnnonce){

}

//Supprimer une annonce
function deleteAnnonceData($annonce){

}

//cette fonction prend en paramètre les données d'une annonce et l'ajoute
function addAnnonceData($donneesAnnonce){

}
?>
