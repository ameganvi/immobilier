<?php

/*
Ce controllers traitera les données liées à l'utilisateurs de l'agence
qui peut essentiellement se connecter et faire des publications et des
modifications
*/

include_once($_SERVER['DOCUMENT_ROOT'].'/immohayibo/models/userModel.php');

/* cette fonction prend en paramètres les données d'un utilisateur et le
  connecte à la plateforme
*/
if(isset($_POST['login']) && isset($_POST['password'])){
    $donneesUser = array(
    "login" => htmlspecialchars($_POST['login']),
    "password"=> htmlspecialchars($_POST['password'])
  );

  getConnected($donneesUser);
}

function getConnected($donneesUser=''){

   $user = seConnecter($donneesUser);
   if($user)
    echo ('Yes you can');
   else
      echo('Oups you cant');
}


//Cette fonction déconnecte l'utilisateur courant
function seDeconnecter(){

}


//Récupérer les informations d'un utilisateur à partir de ses données fournies
function getUserData($donneesUtilsateur){

}

?>
