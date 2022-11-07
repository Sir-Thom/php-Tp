<?php $titre = 'Connexion';?>

<?php ob_start();?>

<?php if(isset($_SESSION['error'])){?>
<div  id="alert"class=" alert alert-danger alert-dismissible fade show" role="alert">
<i class="bi bi-exclamation-triangle-fill"></i>
      erreur lors de la connexion 

    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div> 
<?php
}else{?>
<div  id="alert"class="alert alert-danger alert-dismissible fade hide" role="alert">
<i class="fa-solid fa-hexagon-exclamation"></i>connexion invalide
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div> 
<?php
}
 ?>
<br />

<div class="row d-flex justify-content-center  text-center">


<div class="col-4 justify-content-center text-center ">
  <form data-bitwarden-watching="1" form method="post"  action="index.php?action=seConnecter" enctype="multipart/form-data"
    class=" text-center form-signin my-2 needs-validation" method="POST" style="max-width:400px" novalidate>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="username"
                name="username" placeholder="Nom d'utilisateur" minlength="3"
                maxlength="64" requiredtype="username" class="form-control" id="floatingInput username" >
                <div class="invalid-feedback">
                Nom d'utilisateur est obligatoire et doit avoir entre 3 et 64
                caractères
            </div>
      <label for="floatingInput">Nom d'utilisateur&nbsp;:</label>
    </div>
    <div class="form-floating">
      <input   type="password" id="username"
                name="password" placeholder="Mot de passe" minlength="3"
                maxlength="64" required class="form-control" id="floatingPassword">
      <label for="floatingPassword">Mot de passe&nbsp;:</label>
      <div class="invalid-feedback">
                Mot de passe est obligatoire et doit avoir entre 3 et 64
                caractères
            </div>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>

  </form>
  </div>




    
  

</body>

<script src="js/validationFormulaire.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>