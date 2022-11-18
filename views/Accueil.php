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
  <div class="album py-2">
    <div class="container">
      <div class="row  gy-5">
        
          <?php while ($enregistrement = $resultatSaucisse->fetch()) {?>
            <div class="col-md-4 ">
              <div class=" card">
                <p class="card-title"> <?php echo $enregistrement['nom'] ?> 
                </p>            
                  <div class="col">
                    <div class="shadow-sm">
                      <svg  class="img-responsive tocenter" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
                        <image class="img-responsive tocenter" href="<?php echo $enregistrement['destinationImage'] ?>" height="200" width="200"/>
                      </svg>
                      </br>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <label> <?php echo $enregistrement['prix'] ?>$ 
                      </label>             
                    </div>
                  
                  <small class="text-muted">
                    <button type="button" class="saucisse btn btn-sm btn-outline-secondary ">ajouter au panier 
                      <i class="fa-solid fa-cart-shopping fa-md">
                      </i>  
                    </button>
                  </small>
                  </div>
              </div>
            </div>
            <?php }?>
            <?php $resultatSaucisse->closeCursor();?>
        
      </div>
    </div>
  </div>
</body>
<?php $contenu = ob_get_clean();?>
<script type="text/javascript" src="js/Panier.js"></script>

<?php require 'Template.php';?>