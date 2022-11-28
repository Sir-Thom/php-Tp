<?php
require_once 'models/Manager.php';
require 'models/ManagerSaucisse.php';
class ManagerPanier extends Manager
{
   
   
    public function getIDPanier()
    {
      $reponse = $this->getConnexion()->prepare("SELECT id_panier fROM tbl_panier WHERE id_utilisateur=:id");
      $reponse ->bindparam('id', $_SESSION["idpanier"], PDO::PARAM_INT);
      $reponse->execute();
      $_SESSION["IPAN"]= $reponse->fetchColumn(0);
      return  $reponse; 
    }
    public function RemoveSaucisse($codeSaucisse)
    {
        $reponse = $this->getConnexion()->prepare("DELETE  FROM contient WHERE id_saucisse = :id");
        $reponse ->bindparam('id', $codeSaucisse, PDO::PARAM_INT);
        $reponse->execute();
          
        return  $reponse; 
      }
      public function AjoutSaucisse(){
            $reponse = $this->getConnexion()->prepare("INSERT INTO contient (id_panier, id_saucisse) VALUES (:idUser, :id)");
            $reponse ->bindparam('idUser', $_SESSION["IPAN"], PDO::PARAM_INT);
            $reponse ->bindparam('id', $_SESSION["idsaucisse"], PDO::PARAM_INT);
            $reponse->execute();
      
      return  $reponse; 
      }
    public function obtenirSaucisse()
    {     
        $reponse = $this->getConnexion()->prepare(" SELECT contient.id_saucisse, tbl_saucisse.nom, tbl_saucisse.destinationImage, tbl_saucisse.prix
                                                    FROM (contient
                                                    INNER JOIN tbl_saucisse ON contient.id_saucisse = tbl_saucisse.id_saucisse)
                                                    WHERE contient.id_panier = :idpanier");
      $this->getIDPanier();
        $reponse ->bindparam('idpanier', $_SESSION["IPAN"], PDO::PARAM_INT);
        $reponse ->fetchAll(PDO::FETCH_ASSOC);
        $reponse->execute();
          
        return  $reponse;     
        echo $reponse;  
    }       
}

?>


