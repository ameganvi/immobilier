<?php

/*
Ce controllers traitera les données liées à l'utilisateurs de l'agence
qui peut essentiellement se connecter et faire des publications et des
modifications
*/

include_once('../models/userModel.php');

/* cette fonction prend en paramètres les données d'un utilisateur et le
  connecte à la plateforme
*/
$donneesUser = array(
  "login" => htmlspecialchars($_POST['login']),
  "password"=> htmlspecialchars($_POST['password'])
);

getConnected($donneesUser);

function getConnected($donneesUser=''){
  /*
  $userInfo = array(
      "login" => "espoir",
      "password" => "espoir",
  );*/

   $user = seConnecter($donneesUser);
   if($user)
    echo ('Yes you can');
   else
      echo('Oups you cant');
 //var_dump($user);
}


//Cette fonction déconnecte l'utilisateur courant
function seDeconnecter(){

}


//Récupérer les informations d'un utilisateur à partir de ses données fournies
function getUserData($donneesUtilsateur){

}

?>
