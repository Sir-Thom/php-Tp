<?php
require_once 'models/Manager.php';

class ManagerPanier extends Manager
{
    private $saucisseslist = array();
    public function __construct()
    {
        /*$this->provinces["CDN"] = array("Alberta", "Colombie-Britannique", "Île-du-Prince-Édouard", "Manitoba", "Nouveau-Brunswick", "Nouvelle-Écosse", "Ontario", "Québec", "Saskatchewan", "Terre-Neuve-et-Labrador");
        $this->provinces["MEX"] = array("Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "...");
        $this->provinces["USA"] = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "...");
    */}
    public function getSauccise($nom){
        $reponse = $this->getConnexion()->prepare( 'SELECT * FROM tbl_saucisse
            WHERE nom = :varnom,' ); 
    }
   
    
}

?>


