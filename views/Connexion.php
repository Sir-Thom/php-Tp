<?php $titre = 'Connexion';?>

<?php ob_start();?>

<?php //mettre votre message s'il y a lieu ?>
<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
    votre message...
    <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div> -->
    class="my-2 needs-validation" method="POST" novalidate>
                name="username" placeholder="Nom d'utilisateur" minlength="3"
                Nom d'utilisateur est obligatoire et doit avoir entre 3 et 64
                caractères
            </div>
    </div>
                name="password" placeholder="Mot de passe" minlength="3"
                Mot de passe est obligatoire et doit avoir entre 3 et 64
                caractères
            </div>
    </div>
<<<<<<< HEAD
    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary" type="submit">
                Se connecter
            </button>
        </div>        
    </div>
</form>
=======
>>>>>>> main

<script src="js/validationFormulaire.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>