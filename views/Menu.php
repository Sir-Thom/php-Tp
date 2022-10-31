<!-- Nav tabs -->
<header>

</header>
<script></script>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg d">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav navbar-right">::before
            <li>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  ms-auto">
                
               
                <a class="nav-link <?php navClass("panier");?>"
                        href="index.php?action=panier">
                        <i style="color:white;" class="fa-solid fa-cart-shopping fa-md">
                    </i>
                        Panier    
                </a>
                </div>
            </div>
            </li>
            <li>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav  ms-auto">
                
                   <!-- template pour inscription !--> 
                <a class="nav-link <?php navClass("inscription");?>"
                        href="index.php?action=inscription">
                        Inscription
                </a>
                </div>
            </div>
            </li>
            <li>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-right ms-auto">
                    <!--  Ajouter le code pour gérer le menu afin qu'il bascule à déconnexion quand la personne est connecté et vice versa   -->
                    <a class="nav-link <?php navClass("connexion");?>"
                        href="index.php?action=connexion">
                        Se connecter
                    </a>
                </div>
            </div>
            </li>
        </ul>
       
   
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