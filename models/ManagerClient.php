<?php 
require_once 'models/Manager.php';

class ManagerClient extends Manager{
    
    public function UserConnexion($user, $pass){
            $reponse = $this->getConnexion()->prepare( 'SELECT * FROM tbl_utilisateur
            WHERE nomUtilisateur = :varusername'
            );  // Requête préparée
            
            $reponse->bindparam('varusername', $user, PDO::PARAM_STR);
            
            $reponse->execute();
            //va recup tous ce qui rapport avec le user qui se connect
            $getpass = $reponse->fetch();
            if ( $getpass)  {
               
                return true;
                
               
                } else {
                    return false;
                }
            $getpass['MotDePasse'] = $pass; //password décrypter
            $getpass['MotDePasse'].password_verify($pass, $getpass['MotDePasse']);
            if ( $reponse->fetch())  {
               
                return true;
                
               
                } else {
                    return false;
                }
    }
}
?>