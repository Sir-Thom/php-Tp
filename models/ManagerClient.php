<?php 
require_once 'models/Manager.php';
$IsIn = false;
class ManagerClient extends Manager{
    public function __addId($id_panier)
    {
        $sql =$this->getConnexion()->prepare("INSERT INTO tbl_panier(id_utilisateur) Values (:id)");
       
        $sql->bindparam('id',$id_panier, PDO::PARAM_INT);
        
        $sql->execute();
        return $sql;
       
    }

    public function obtenirUserPanier($userid)
    {
    
            $reponse = ("SELECT * fROM tbl_panier WHERE id_utilisateur=$userid");
            
           
            $i = $this->getConnexion()->query($reponse);
            if($i->rowCount() > 0){
                return false;
        
            }
            else{
                return true;
            }
            
    

           
        
       
    }
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
                
                if($this->obtenirUserPanier($id) == true){
                    $this->__addId($id);
                }
                
                return $fact;
                
               
                } else {
                    return false;
                }
       
           
           
    }
}
?>