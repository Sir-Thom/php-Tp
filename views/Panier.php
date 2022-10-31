<?php $titre = 'Panier';?>

<?php ob_start();?>

<div class="container mt-3">
    <table class="table mt-3 table-striped table-secondary">
        <thead>
            <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Saussice</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
        <tbody  scope="col" >
            <!--<?php foreach ($informations as $information) {?>
            <tr id="ligneinfo" scope="col-4">
                <td><?php echo $information->donnee; ?>;</td>
                 
                
              
            </tr>
            <?php }?>-!>
        </tbody>
    </table>
</div>

<script src="./javascript/information.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'template.php';?>