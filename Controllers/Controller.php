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
   require_once 'models/ManagerClient.php';
   if(empty(htmlentities($_POST["username"]))&& empty( htmlentities($_POST["password"]))){
    header("location:index.php?action=connexion");   
     
}

   $Managerclient = new ManagerClient();
    $Managerclient->UserConnexion($_POST["username"],$_POST["password"]);
   
    $userinfo = $Managerclient->UserConnexion($_POST["username"],$_POST["password"]);
    echo $userinfo;
    if ($userinfo == true ){
        $_SESSION["username"] = $_POST["username"];
        

        //var_dump($_SESSION);
       
        header("location:index.php?action=accueil");
        
        
    }else{
        header("location:index.php?action=connexion");
    }
   //header("location:index.php?action=accueil");
    

    // Essayer de connecter l'utilisateur,
    // puis rediriger ver l'accueil en cas de réussite
    // ou vers la page de connexion en cas d'échec.
    
}

function listeSaucisse()
{
    $Saucisse = new ManagerSaucisse;
    $resultatSaucisse = $Saucisse->getSaucisse();
    require 'view/Accueil.php';
}