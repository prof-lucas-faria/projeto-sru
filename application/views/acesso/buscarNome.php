<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<div class="form-row campoBusca">    

    <div class="form-group form-inline">
        <form action="<?= base_url('index.php/Acesso_controller/resultadoAcesso/') ?>" method='post'>        
            <input id="busca" name="busca" placeholder="Digite o nome" class="form-control" type="text">        
            <button type="submit" class="btn btn-danger">Buscar</button>            
        </form>
    </div>

</div>
