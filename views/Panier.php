<?php $titre = 'Panier';?>

<?php ob_start();?>
<?php if(empty($_SESSION)){ ?>
     <script src="js/NoConnexion.js"></script>

  <!-- End non connecter -->
  <?php } ?>
<br />

<?php echo $_SESSION["idpanier"];?>

  
<?php if($_SESSION == ""){ ?>
    <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
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
              </thead>

                 <!-- ce qui doit dupliquer à chaque items ajouter au panier -->
              <tbody>
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
                </tr>
               
              </tbody>
            </table>
          </div>
         
        </div>
      </div>



    </div>
  </div>
</div>

</section>


    

<?php } ?>
                
   
<script src="js/Panier.js"></script>
<?php $contenu = ob_get_clean();?>

<?php require 'template.php';?>