<?php $titre = 'Connexion';?>

<?php ob_start();?>

<?php //mettre votre message s'il y a lieu ?>
<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
    votre message...
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div> -->
<br />
<body class="text-center">    
<main class="form-signin w-100 m-auto">
  <form data-bitwarden-watching="1" form method="post"  action="index.php?action=seConnecter" enctype="multipart/form-data"
    class="my-2 needs-validation" method="POST" novalidate>
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
</main>


    
  

</body>

<script src="js/validationFormulaire.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>