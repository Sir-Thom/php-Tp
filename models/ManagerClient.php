<?php 
require_once 'models/Manager.php';

class ManagerClient extends Manager{
    
    public function UserConnexion($user, $pass){
            $reponse = $this->getConnexion()->prepare( 'SELECT * FROM tbl_utilisateur
            WHERE nomUtilisateur = :varusername'
            );  // Requête préparée
            
            $reponse->bindparam('varusername', $user, PDO::PARAM_STR);
            
            $reponse->execute();
            $verif1 =  null;
            //va recup tous ce qui rapport avec le user qui se connect
            $getpass = $reponse->fetch();

            if ($getpass)  {
                $word = $pass;
                $hash =$getpass['motDePasse'];
               
                
                return password_verify($word, $hash);
                
               
                } else {
                    return false;
                }
       
           
           
    }
}
?>