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
    public function obtenirSaucisse($codeSaucisse)
    {
      
        
       
            $reponse = $this->getConnexion()->prepare("INSERT INTO 
            contient(id_panier, id_saucisse) 
            Values (
            (SELECT id_panier FROM tbl_panier WHERE id_utilisateur = :id ),
            (SELECT id_saucisse FROM tbl_saucisse WHERE id_saucisse = :idsaus Order By nom)
            )");
            $reponse ->bindparam('id', $_SESSION["idpanier"], PDO::PARAM_INT);
            $reponse ->bindparam('idsaus', $_SESSION["idsaucisse"], PDO::PARAM_INT);
            $reponse->execute();
          
            return  $reponse;

           
        
       
      }
   
    
}

?>


