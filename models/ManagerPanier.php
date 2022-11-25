<?php
require_once 'models/Manager.php';
require 'models/ManagerSaucisse.php';
class ManagerPanier extends Manager
{
    private $saucisseslist = array();
    public function __construct()
    {
        /*$sql=$this->getConnexion()->prepare( 'INSERT INTO tbl_panier (id_utilisateur)  (SELECT id_utilisateur 
        FROM tbl_saucisse.tbl_utilisateur 
        WHERE (id_utilisateur=:id))'
        );  // Requête préparée)*/
        $sql =$this->getConnexion()->prepare("INSERT INTO tbl_panier(id_utilisateur) Values (:id)");
        // Exécution directe
        //var_dump( $sql->bindparam('id', $_SESSION["idpanier"], PDO::PARAM_INT));
        $sql->bindparam('id',$_SESSION["idpanier"], PDO::PARAM_INT);
        // $sql->bindparam('id_panier', $_SESSION["idpanier"], PDO::PARAM_INT);
        //$/saucisses = $this->getConnexion()->query($sql);
        $sql->execute();
        return $sql;
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
            $reponse = $this->getConnexion()->prepare("INSERT INTO 
            contient(id_panier, id_saucisse) 
            Values (
            (SELECT id_panier FROM tbl_panier WHERE id_utilisateur = :id),
            (SELECT id_saucisse FROM tbl_saucisse WHERE id_saucisse = :idsus)
            )");
            $reponse ->bindparam('id', $_SESSION["idpanier"], PDO::PARAM_INT);
            $reponse ->bindparam('idsus', $_SESSION["idsaucisse"], PDO::PARAM_STR);
            $codeSaucisse = $this->getConnexion()->query($reponse);
            return  $codeSaucisse;

           
        }
      }
   
    
}

?>


