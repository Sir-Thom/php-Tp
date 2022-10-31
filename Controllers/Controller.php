<?php
// Démarrer votre session de façon sécuritaire

if( session_status() == PHP_SESSION_NONE)
{
    session_start();
}
else
{
    echo 'You can not accesss';
}   
//var_dump($_SESSION);

// Ajouter votre manager
require_once 'models/Manager.php';
function accueil()
{
    require 'views/Accueil.php';
}

function connexion()
{
    require 'views/Connexion.php';
    
   
}
function inscription()
{
    require 'views/Inscription.php';

}

function seDeconnecter()
{
    // Faites votre déconnexion, puis rediriger vers l'accueil
    session_unset(); 
    session_destroy();
}

function panier(){
    require 'views/Panier.php';
}

function seConnecter()
{
   // gros commentaire qui veux dire sa marche pas
   require_once 'models/ManagerUser.php';
   
   /* $ManagerUser = new ManagerUser();
    $ManagerUser->UserConnexion($_POST["username"],$_POST["password"]);
     //$ManagerUser->getUser();
    //echo $ManagerUser->getUser();
    $userinfo = $ManagerUser->UserConnexion($_POST["username"],$_POST["password"]);
    //echo $userinfo;
   header("location:index.php?action=accueil");*/
    

    // Essayer de connecter l'utilisateur,
    // puis rediriger ver l'accueil en cas de réussite
    // ou vers la page de connexion en cas d'échec.
    
}