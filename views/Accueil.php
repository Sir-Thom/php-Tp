<?php $titre = 'Accueil';?>

<?php ob_start();?>

<h3> 
<?php 
    if(empty($_SESSION)){
         echo htmlentities("Bienvenue sur ce site veuillez vous connecter.");
        }
    else{
        echo htmlentities("Bienvenue sur ce site ".$_SESSION['username']);
    }
   
?>
</h3>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>