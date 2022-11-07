<!-- Nav tabs -->



<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a style="font-size: 20px;" class="navbar-brand" <?php navClass("accueil");?>"
                        href="index.php?action=accueil">
                        <i style="color:white;" class="fa-solid fa-hotdog fa-md"></i> Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-right" id="navbarCollapse">
      <ul class="navbar-nav ms-auto">
      
        <li class="nav-item">
        <a class="nav-link <?php navClass("panier");?>"
                        href="index.php?action=panier">
                        <i style="color:white;" class="fa-solid fa-cart-shopping fa-md">
                    </i>
                        Panier    
                </a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php navClass("inscription");?>"
                        href="index.php?action=inscription">
                        Inscription
                </a>
        </li>
        <li class="nav-item">
        <?php 
                    if(isset( $_SESSION["username"])){?>
                   <a class="nav-link <?php navClass("connexion");?>"
                    href="index.php?action=seDeconnecter">Se Déconneter <i style="color:white;" class="fa-solid fa-right-from-bracket"></i></a>
                    <?php
                    }                
                
                    if(!isset( $_SESSION["username"])){?>
                    <a class="nav-link <?php navClass("connexion");?>"
                    href="index.php?action=connexion">Se connecter <i style="color:white;" class="fa-solid fa-right-to-bracket"></i></a>
                    <?php
                    }?>


      </ul>
    </div>
  </div>
</nav>


<?php
function parDefaut()
{
    if (!isset($_GET["action"])) {
        echo "active";
    }
}

function navClass($menu)
{
    if (isset($_GET["action"])) {
        hightligtMenu($_GET["action"], $menu);
    }
}

function hightligtMenu($action, $choixMenu)
{
    if ($action == $choixMenu) {
        echo ' active ';
    } else {
        echo "";
    }
}
?>