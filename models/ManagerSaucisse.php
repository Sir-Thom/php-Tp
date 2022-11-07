<?php

require_once "models/Manager.php"; // On pourra utiliser la connexion

// Hérite de la classe Manager
class ManagerSaucisse extends Manager
{
    // Retourne la liste des provinces triés par nom de province
    public function getSaucisse()
    {
        $sql = 'SELECT *
				FROM tbl_saucisse
				ORDER BY nom';
        // Exécution directe
        $saucisses = $this->getConnexion()->query($sql);
        return $saucisses;
    }
}