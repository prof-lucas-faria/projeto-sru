<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="form-row homeBusca">    

    <div class="form-group form-inline">
        <?= form_open('homeController/resultado/') ?>


        <fieldset class="fieldTipoRefeicao">
            <label class="lblTipoRefeicao" >Tipo da refeição:</label><br>
            <div class="form-group">
                <?php
                foreach ($tiposCardapio as $i => $tipos) {
                    if ($i == $tipoCardapioEscolhido) {
                        echo "\n" . '<input name="tipoCardapio" type="radio" value="' . $i . '" CHECKED>' . $tipos;
                    } else {
                        echo "\n" . '<input name="tipoCardapio" type="radio" value="' . $i . '">' . $tipos;
                    }//codigo para manter marcado..  
                    echo ' &nbsp';
                }
                ?>

        </fieldset>
        <div class="form-group botoesBusca">
            <input id="busca" name="busca" placeholder="Digite a matrícula" class="form-control" type="text">        
            <button type="submit" class="btn btn-danger">Buscar</button>   </div>
    </div>           
</form><?= form_close() ?>
</div>

</div>
