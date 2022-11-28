<?php

// ----------------------------------------------------------------
// Fait par :
// Thomas  Toulouse
// Maxance Gusse
// ----------------------------------------------------------------

require 'controllers/Controller.php';

try {
    if (!isset($_GET['action'])) {
        return listeSaucisse();
    }
    switch ($_GET['action']) {
        case 'connexion':
            connexion();
            break;
        case 'accueil':
            listeSaucisse();
            
            break;
        case 'obtenirSaucisse':
            obtenirSaucisse();
            break;
        case 'seConnecter':
            seConnecter();
            break;
        case "seDeconnecter":
            seDeconnecter();
            break;
        case "panier":
            listeSaucisse();
            
            break;
        default:
            throw new Exception('Aucune page spécifique demandée');
    }
} catch (PDOException $e) {
    $msgErreur = $e->getMessage();
    require 'views/Erreur.php';
} catch (Exception $ex) {
    $msgErreur = $ex->getMessage();
    require 'views/Erreur.php';
}