<?php $titre = 'Panier';?>

<?php ob_start();?>
<?php 
if(empty($_SESSION)){?>
<div class="alert alert-warning" role="alert">
    <h4  class="alert-heading">Attention!!!</h4>
    <p>veuillez vous connectez ou vous inscription</p>
 </div> 
<?php
}
?>
<?php if($_SESSION == ""){ ?>
    


<br />
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
    <?php
    }
    ?>
                
    <script src="./javascript/information.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'template.php';?>