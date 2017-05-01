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

  $dbh = getConnexion(); //Récupération de la chaine de connexion

  $req = "
          SElECT
            	  artId				        AS idArticle,
                artSurface			    AS surfaceArticle,
                artAdresse			    AS adresseArticle,
                artDescription		  AS descriptionArticle,
                artPprix			      AS prixArticle,
                artDateDisponible	  AS dateDisponibiliteArticle,
                artDatePublication  AS datePublicationArticle,
                typLibelle 	      	AS libelleArticle,
                vilNom				      AS nomVille,
                opeLibelle	        AS typeOperation

         FROM article art
         JOIN type_article  tpart
              ON art.TYPID = tpart.TYPID
         JOIN ville vil
              ON art.VILID  = vil.VILID
         JOIN type_operation tpop
              ON tpop.opeId = art.OPEID
         WHERE art.artDeleted = false
               AND vil.vilDeleted = false
               AND  tpart.typDeleted = FALSE
               AND opeDeleted = FALSE;
        " ;

  $stm = $dbh->prepare($req); //Préparation de la requète
  $stm->execute(); //Exécution de la requette
  $reponse = $stm->fetchAll(); //Récupération du résultat

  return $reponse ;

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


?>
