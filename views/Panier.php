<?php $titre = 'Panier';?>

<?php ob_start();?>
<?php if(empty($_SESSION)){ ?>
     <script src="js/NoConnexion.js"></script>

  <!-- End non connecter -->
  <?php } ?>
<br />

 

  
<?php ?>
    <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

        <?php while ($enregistrement = $resultatSaucisse->fetch()) {?>
            <div class=" col-md-4 ">
              <div class=" card">
                <p class=" card-title" id="idsaucisse"> <?php echo $enregistrement['nom'] ?> 
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
                    <button type="button" id="<?php echo $enregistrement['id_saucisse'] ?>" class="saucisse btn btn-sm btn-outline-secondary ">supprimer du panier 
                      <i class="fa-solid fa-trash fa-md">
                      </i>  
                    </button>
                  </small>
                  </div>
              </div>
            </div>
            <?php }?>
            <?php $resultatSaucisse->closeCursor();?>
            
          <!--<div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>-->

                 <!-- ce qui doit dupliquer à chaque items ajouter au panier -->
              <!--<tbody>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <p class="text-dark d-inline-block align-middle">nom</p></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>prix</strong></td>
                  <td class="border-0 align-middle"><strong>quantité</strong></td>
                  <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>-->
               
              </tbody>
            </table>
          </div>
         
        </div>
      </div>



    </div>
  </div>
</div>

</section>


    

<?php ?>
                
   
<script src="js/Panier.js"></script>
<?php $contenu = ob_get_clean();?>

<?php require 'template.php';?>