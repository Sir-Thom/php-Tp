<?php 
require_once 'models/Manager.php';

class ManagerClient extends Manager{
    
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
                $_POST["id"] = $id;
                array_push($fact, password_verify($word, $hash),$id);
                return $fact;
                
               
                } else {
                    return false;
                }
       
           
           
    }
}
?>