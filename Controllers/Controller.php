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
   
   
   require_once 'models/ManagerClient.php';
   if(empty(htmlentities($_POST["username"]))&& empty( htmlentities($_POST["password"]))){
    header("location:index.php?action=connexion");   
     
}
// créer var session
    if(empty(htmlentities($_POST["idsaucisse"]))&& empty( htmlentities($_POST["idpanier"]))){
        $_SESSION["idsaucisse"];
        $_SESSION["idpanier"];
    }
   $Managerclient = new ManagerClient();
  

    $userinfo = $Managerclient->UserConnexion($_POST["username"],$_POST["password"]);
    echo $userinfo;
    if ($userinfo == true ){
        $_SESSION["username"] = $_POST["username"];
        

      
       
        header("location:index.php?action=accueil");
        
        
    }else{
        $_SESSION["error"] ='error';
        header("location:index.php?action=connexion");
    }
   
    

    // Essayer de connecter l'utilisateur,
    // puis rediriger ver l'accueil en cas de réussite
    // ou vers la page de connexion en cas d'échec.
    
}

function obtenirSaucisse(){
    if (!isset ($_POST["idsaucisse"])){return;}
    $codeSaucisse =htmlentities(($_POST["idsaucisse"]));
  
    $panier = new ManagerPanier;
    $resultatPays= $panier->obtenirSaucisse($codeSaucisse);
    //echo $resultatPays;
    //envoye code 

    echo json_encode($resultatPays);


    /*if (!isset ($_POST["codePays"])){return;}
    $codePays =htmlentities(($_POST["codePays"]));
    //$pays = new ;
    $resultatPays= $pays->obtenirProvinces($codePays);
    //echo $resultatPays;
    echo json_encode($pays->obtenirProvinces($codePays));*/
}


function listeSaucisse()
{
    $Saucisse = new ManagerSaucisse;
    $resultatSaucisse = $Saucisse->getSaucisse();
    require 'views/Accueil.php';
}