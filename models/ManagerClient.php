<?php 
require_once 'models/Manager.php';

class ManagerClient extends Manager{
    public function __addId($idpanier,$iduser)
    {
        $sql =$this->getConnexion()->prepare("INSERT INTO tbl_panier (id_utilisateur,id_panier) Values('1','1')");
        // Exécution directe
        $sql->bindparam('id', $idpanier, PDO::PARAM_INT);
        $sql->bindparam('id', $iduser, PDO::PARAM_INT);
        $client = $this->getConnexion()->query($sql);
        $client->execute();
        return $client;
        /*$this->provinces["CDN"] = array("Alberta", "Colombie-Britannique", "Île-du-Prince-Édouard", "Manitoba", "Nouveau-Brunswick", "Nouvelle-Écosse", "Ontario", "Québec", "Saskatchewan", "Terre-Neuve-et-Labrador");
        $this->provinces["MEX"] = array("Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "...");
        $this->provinces["USA"] = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "...");
    */}
    public function UserConnexion($id,$user, $pass){
            $fact = array();
            $reponse = $this->getConnexion()->prepare( 'SELECT * FROM tbl_utilisateur
            WHERE (nomUtilisateur = :varusername)'
            );  // Requête préparée
            
            $reponse->bindparam('varusername', $user, PDO::PARAM_STR);
        
            $reponse->execute();
            $verif1 =  null;
            //va recup tous ce qui rapport avec le user qui se connect
            $getpass = $reponse->fetch();

            if ($getpass)  {
                $word = $pass;
                $hash =$getpass['motDePasse'];
                $id =$getpass["id_utilisateur"];
                array_push($fact, password_verify($word, $hash),$id);
                return $fact;
                
               
                } else {
                    return false;
                }
       
           
           
    }
}
?>