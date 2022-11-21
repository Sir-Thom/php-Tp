<?php
require_once 'models/Manager.php';
require 'models/ManagerSaucisse.php';
class ManagerPanier extends Manager
{
    private $saucisseslist = array();
    public function __construct()
    {
         $sql = "INSERT INTO tbl_panier (id_utilisateur) VALUES ('1')";
        // Exécution directe
        $saucisses = $this->getConnexion()->query($sql);
        return $saucisses;
        /*$this->provinces["CDN"] = array("Alberta", "Colombie-Britannique", "Île-du-Prince-Édouard", "Manitoba", "Nouveau-Brunswick", "Nouvelle-Écosse", "Ontario", "Québec", "Saskatchewan", "Terre-Neuve-et-Labrador");
        $this->provinces["MEX"] = array("Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "...");
        $this->provinces["USA"] = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "...");
    */}
    public function getSaucisse()
    {
       
    }
    public function obtenirSaucisse($codeSaucisse)
    {
       // $codeSaucisse->getSaucisse();

        if (array_key_exists($codeSaucisse, $this->saucisse)) {

            return $this->saucisseslist[$codeSaucisse];
           
        }
      }
   
    
}

?>


