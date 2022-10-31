<?php

// ----------------------------------------------------------------
// Fait par :
// Thomas  Toulouse
// Maxance Gusse
// ----------------------------------------------------------------

require 'controllers/Controller.php';

try {
    if (!isset($_GET['action'])) {
        return accueil();
    }
    switch ($_GET['action']) {
        case 'inscription':
            inscription();
            break;
        case 'connexion':
            connexion();
            break;
        case 'accueil':
            accueil();
            break;
        case 'seConnecter':
            seConnecter();
            break;
        case "seDeconnecter":
            seDeconnecter();
            break;
        case "panier":
            panier();
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