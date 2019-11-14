<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="form-row homeBusca">    

    <div class="form-group form-inline">
        <form action="<?= base_url('index.php/homeController/resultado/') ?>" method="post">  
            <div class="form-group">
                <fieldset class="fieldTipoRefeicao">
                    <label class="lblTipoRefeicao" >Tipo da refeição:</label><br>
                        <?php
                        foreach ($tiposCardapio as $i => $tipos) {
                            //if($i == $tipoCardapioEscolhido){$check = 'CHECKED';}//codigo para manter marcado..a implementar
                            echo "\n".'<input name="tipoCardapio" type="radio" value="', $i,'">', $tipos;
                            
                           // echo $tipoCardapioEscolhido;
                        }
                        ?>
                </fieldset>
                    <br>
                    
                    <input type="radio" name="teste" checked="true">1
                    <input type="radio" name="teste" checked="false">2
                  
                    <input id="busca" name="busca" placeholder="Digite a matrícula" class="form-control" type="text">        
                    <button type="submit" class="btn btn-danger">Buscar</button> 
            </div>           
        </form>
    </div>

</div>
