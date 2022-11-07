<!doctype html>
<html lang="fr">

<head>
    <title><?php echo $titre ?></title>
    <meta charset="utf-8">
    <!-- font https://github.com/tonsky/FiraCode-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/firacode@6.2.0/distr/fira_code.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- pour cellulaire -->
    <!-- Bootstrap CSS https://getbootstrap.com/-->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
        crossorigin="anonymous">

    <!-- sweetalert2 (swal) https://sweetalert2.github.io/ -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/aa99fe7e94.js" crossorigin="anonymous"></script>
</head>
<style>
    body { font-family: 'Fira Code', monospace; }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php require 'Menu.php';?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 offset-1">
                <H1 class="text-center"> <?php echo $titre ?></H1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mx-auto ">
                <?php echo $contenu ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS https://getbootstrap.com/-->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous">
    </script>
</body>

</html>