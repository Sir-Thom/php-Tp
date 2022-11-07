<?php $titre = 'Accueil';?>

<?php ob_start();?>
<br />
<br />
<br />
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

<body>
  <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    
        <?php while ($enregistrement = $resultatSaucisse->fetch()) {?>
          <div class="card-body">
            <p class="card-text"> <?php echo $enregistrement['nom'] ?> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <label> <?php echo $enregistrement['prix'] ?>$ </label>             
                </div>
              </div>
              <small class="text-muted">
              <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier <i class="fa-solid fa-cart-shopping fa-md">
              </i>  
              </button>
              </small>
              </div>
              </div>
              <div class="col">
              <div class="card shadow-sm">
              <svg width="200" height="200" xmlns="http://www.w3.org/2000/svg">
              <image href="<?php echo $enregistrement['destinationImage'] ?>" height="200" width="200" />
              </svg>
              </br>
        <?php }?>
              <?php $resultatSaucisse->closeCursor();?>

      </div>
    </div>
  </div>
</body>
<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>