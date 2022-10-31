<?php $titre = 'Accueil';?>

<?php ob_start();?>

<h3> 
<?php 
    if(empty($_SESSION)){
         echo "Bienvenue sur ce site veuillez vous connecter." ;
    }
    else{
        echo "Bienvenue sur ce site"+ $_SESSION;
    }
   
?>
</h3>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>