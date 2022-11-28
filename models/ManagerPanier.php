<?php
require_once 'models/Manager.php';
require 'models/ManagerSaucisse.php';
class ManagerPanier extends Manager
{
   
   
    public function getSaucisse()
    {
       
    }
    public function RemoveSaucisse($codeSaucisse)
    {
        $reponse = $this->getConnexion()->prepare("INSERT INTO tbl_panier
        (id_panier, id_saucisse) 
        Values (
        (DELETE  FROM tbl_panier WHERE id_utilisateur = :id");
        $reponse ->bindparam('id', $_SESSION["idpanier"], PDO::PARAM_INT);
        $reponse->execute();
          
        return  $reponse; 
      }
    public function obtenirSaucisse()
    {     
        $reponse = $this->getConnexion()->prepare(" SELECT contient.id_saucisse, tbl_saucisse.nom, tbl_saucisse.destinationImage, tbl_saucisse.prix
                                                    FROM (contient
                                                    INNER JOIN tbl_saucisse ON contient.id_saucisse = tbl_saucisse.id_saucisse)
                                                    WHERE contient.id_panier = idpanier");
        $reponse ->bindparam('idspanier', $_SESSION["idpanier"], PDO::PARAM_INT);
        $reponse->execute();
          
        return  $reponse;       
    }       
}

?>


