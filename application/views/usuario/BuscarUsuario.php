<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="form-row homeBusca">    

    <div class="form-group form-inline">
        <form action="<?= base_url('index.php/homeController/resultado/') ?>" method="post">        
            <input id="busca" name="busca" placeholder="Digite a matrícula" class="form-control" type="text">        
            <button type="submit" class="btn btn-danger">Buscar</button>            
        </form>
    </div>

</div>
