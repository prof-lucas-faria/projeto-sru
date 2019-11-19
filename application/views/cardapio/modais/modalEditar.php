<div id="modalEdit" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"><link href="<?= base_url() ?>public/css/estilo.css" rel="stylesheet">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Editar cardápio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container-fluid">

                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">

                            <?= form_open('cardapio_controller/store/') ?>            

                            <div class=" selectTipoCardapio form-inline">
                                <label for="selectTipoCardapio">Tipo de cardápio</label>
                                <select disabled class="form-control" id="idTipoCardapio" name="idTipoCardapio"  value="<?= set_value('idTipoCardapio') ?>">
                                    <option value="0">-Selecione-</option>
                                    <?php
                                    foreach ($this->cardapio_model->getTiposCardapio() as $i => $tipos) {
                                        echo "\n" . '<option name="tipo" id="tipo" value="', $i, '">', $tipos, '</option>';
                                    }
                                
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" disabled class="form-control" name="id" id="recipientId">
                            </div>

                            <?php //echo validation_errors() ?>
                            <div class="form-group">
                                <?php echo form_error('data'); ?>
                                <label for="data">Data:</label>
                                <input type="date" name="data"  id="data" class="form-control" autofocus='true' requiried="true" value="<?php set_value('data') ?>"/>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('nomeCardapio'); ?>
                                <label for="nomeCardapio">Nome :</label>
                                <input type="text" name="nomeCardapio" id="nomeCardapio" class="form-control" autofocus='true' requiried="true" />
                            </div>
                            <div class="form-group ">
                                <?php echo form_error('pratoPrincipal'); ?>
                                <label for="pratoPrincipal">Prato principal: </label>
                                <input type="text" name="pratoPrincipal" id="pratoPrincipal" class="form-control" value="<?= set_value('pratoPrincipal') ?>"/>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('guarnicao'); ?> 
                                <label for="guarnicao">Guarnição</label>
                                <input type="guarnicao" name="guarnicao" id="guarnicao" class="form-control" value="<?= set_value('guarnicao') ?>" />
                            </div>
                            <div class="form-group">
                                <?php echo form_error('acompanhamento'); ?>
                                <label for="acompanhamento">Acompanhamento</label>
                                <input type="acompanhamento" name="acompanhamento" id="acompanhamento" class="form-control" value="<?= set_value('acompanhamento') ?>">
                            </div>
                            <div class="form-group">
                                <?php echo form_error('salada'); ?>
                                <label for="salada">Salada</label>
                                <input type="salada" name="salada" id="salada" class="form-control" value="<?= set_value('salada') ?>" />
                            </div>
                            <div class="form-group">
                                <?php echo form_error('sobremesa'); ?>
                                <label for="sobremesa">Sobremesa</label>
                                <input type="sobremesa" name="sobremesa" id="sobremesa" value="<?= set_value('sobremesa') ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <?php echo form_error('suco'); ?>
                                <label for="suco">Suco</label>
                                <input type="suco" name="suco" id="suco" value="<?= set_value('suco') ?>" class="form-control" />
                            </div>
                            <div class=" btn-group botoesFormulario">
                                <input type="submit" value="Salvar" class="btn btn-success" />
                                <input type="button" value="Limpar" onclick="limpa_formulario()" class="btn btn-info" />
                                <a href="<?= base_url('index.php/cardapio_controller/listar/') ?>">
                                    <input type="button" value="Voltar" data-dismiss="modal" class="btn btn-danger "  />
                                </a>            </div>
                            <input type='hidden' name="id" value="<?= set_value('id') ?: (isset($idCardapio) ? $idCardapio : ''); ?>">
                            <?= form_close(); ?>
                        </div>
                        <div class="row"><hr></div>

                    </div>	

                </div>

            </div>
        </div>
    </div>
</div>