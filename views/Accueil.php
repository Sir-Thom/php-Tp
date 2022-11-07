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
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier <i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier<i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier<i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier<i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier<i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier<i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div> 

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier<i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier<i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" img="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">nom item</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <label>prix</label>
                 
                </div>
                <small class="text-muted"> <button type="button" class="btn btn-sm btn-outline-secondary">ajouter au panier<i class="fa-solid fa-cart-shopping fa-md">
                    </i></button></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>