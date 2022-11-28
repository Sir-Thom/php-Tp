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
require "models/ManagerPanier.php";
require_once 'models/ManagerClient.php';
function accueil()
{
    require 'views/Accueil.php';
}

function connexion()
{
    require 'views/Connexion.php';
    
   
}

function seDeconnecter()
{
    // Faites votre déconnexion, puis rediriger vers l'accueil
    session_unset(); 
    session_destroy();
    header("location:index.php?action=accueil");
}

function panier(){
    
    require 'views/Panier.php';
}

function seConnecter()
{
   
   
   
   if(empty(htmlentities($_POST["username"]))&& empty( htmlentities($_POST["password"]))){
    header("location:index.php?action=connexion");   
     
}
// créer var session
    if(empty(htmlentities($_POST["idsaucisse"]))&& empty( htmlentities($_POST["idpanier"]))){
        $_SESSION["idsaucisse"];
        $_SESSION["idpanier"];
     
    }
   $Managerclient = new ManagerClient();
    

    $userinfo = $Managerclient->UserConnexion($_POST["id"], $_POST["username"],$_POST["password"]);
    //echo $userinfo;
    if ($userinfo[0] == true ){
        $_SESSION["username"] = $_POST["username"];
    
        $_SESSION["idpanier"] = $userinfo[1];
       // $Managerclient->__addId($_SESSION["idpanier"],$_SESSION["idpanier"]);
       
        header("location:index.php?action=accueil");
        
        
    }else{
        $_SESSION["error"] ='error';
        header("location:index.php?action=connexion");
    }
   
    

    // Essayer de connecter l'utilisateur,
    // puis rediriger ver l'accueil en cas de réussite
    // ou vers la page de connexion en cas d'échec.
    
}

function RemoveSaucisse(){
    if (!isset ($_POST["idpanier"])){return;}
    $panier = new ManagerPanier;
    $id = $panier->RemoveSaucisse($_SESSION["idsaucisse"]);
}

function obtenirSaucisse(){
    if (!isset ($_POST["idsaucisse"])){return;}
    $codeSaucisse =(int)($_POST["idsaucisse"]);
  
    $panier = new ManagerPanier;
    $_SESSION["idsaucisse"]=(int)$codeSaucisse;
    $id = $panier->obtenirSaucisse($codeSaucisse);
    //echo $resultatPays;
    //envoye code 
    

    echo json_encode($id);
    
    
}
function listeSaucissePanier()
{
    $Saucisse = new ManagerPanier;
    $resultatSaucisse = $Saucisse->obtenirSaucisse($_SESSION["idpanier"]);
    require 'views/Panier.php';
}

function listeSaucisse()
{
    $Saucisse = new ManagerSaucisse;
    $resultatSaucisse = $Saucisse->getSaucisse();
    require 'views/Accueil.php';
}