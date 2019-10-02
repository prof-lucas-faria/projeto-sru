<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
    <h4 class="text-center"></h4>
    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <?= form_open('cardapio_controller/store') ?>
            <div class="row"><hr></div>
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="text" name="data" id="data" class="form-control" autofocus='true' requiried="true"/>
            </div>
            <div class="form-group">
                <label for="nomeCardapio">Nome :</label>
                <input type="text" name="nomeCardapio" id="nomeCardapio" class="form-control" autofocus='true' requiried="true"/>
            </div>
            <div class="form-group ">
                <label for="pratoPrincipal">Prato principal: </label>
                <input type="text" name="pratoPrincipal" id="pratoPrincipal" class="form-control" />
            </div>
            <div class="form-group">
                <label for="guarnicao">Guarnição</label>
                <input type="text" name="guarnicao" id="guarnicao" class="form-control" />
            </div>
            <div class="form-group">
                <label for="acompanhamento">Acompanhamento</label>
                <input type="acompanhamento" name="acompanhamento" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="salada">Salada</label>
                <input type="salada" name="salada" id="salada" class="form-control" />
            </div>
            <div class="form-group">
                <label for="sobremesa">Sobremesa</label>
                <input type="sobremesa" name="sobremesa" id="sobremesa" class="form-control" />
            </div>
            <div class="form-group">
                <label for="suco">Suco</label>
                <input type="suco" name="suco" id="suco" class="form-control" />
            </div>
            <div class="form-group text-right">
                <input type="submit" value="Salvar" class="btn btn-success" />
            </div>
            <input type='hidden' name="id" value="<?= set_value('id') ?: (isset($id) ? $id : ''); ?>">
            <?= form_close(); ?>
        </div>
        <div class="row"><hr></div>

    </div>	
</div>
