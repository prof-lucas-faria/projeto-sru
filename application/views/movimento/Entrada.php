<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <h1 class="text-center">Entrada</h1>
    <div class="col-md-12">
        <div class="row">
            <div class="alert alert-success text-center">
                <?= $mensagem; ?>
            </div>
        </div>        
</div>

<?php
        include("application/views/usuario/BuscarUsuario.php");
    ?>

</div>