<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!--<div class="btn-group-sm btn-group grupoBotoes">

    <a href="<?= base_url('index.php/cardapio_controller/novo') ?>">
        <button type="button"  class="btn btn-success btn_modal" >Novo<img class="imgNew" src="<?= base_url('assets/images/new_item.png') ?>" ></button>
    </a>
</div>-->
<div class="container table-responsive">
    <table class="table  table-hover">
        <?php if ($listaDeCardapio) { ?> <!--Se houver item na tabela mostra-->
            <tr class="tr">
                <th>Data</th>
                <th>Nome</th>
                <th>Prato principal</th>
                <th>Guarnição</th>
                <th>Acompanhamento</th>
                <th>Salada</th>
                <th>Sobremesa</th>
                <th>Suco</th>
                <th>Ação</th>
            </tr>

            <tbody id="tbody">
                <?php foreach ($listaDeCardapio as $cardapio) : ?>
                    <tr>                
                        <td><?php echo $cardapio->data; ?></td>
                        <td><?php echo $cardapio->nomeCardapio; ?></td>
                        <td><?php echo $cardapio->pratoPrincipal; ?></td>
                        <td><?php echo $cardapio->guarnicao; ?></td>
                        <td><?php echo $cardapio->acompanhamento; ?></td>
                        <td><?php echo $cardapio->salada; ?></td>
                        <td><?php echo $cardapio->sobremesa; ?></td>
                        <td><?php echo $cardapio->suco; ?></td>
                        <td>
                            <a >
                                <input type="image" onclick="" data-toggle="modal" data-target=".bd-example-modal-lg" src="<?php echo base_url(); ?>assets/images/icons-edit-64.png" class="iconTable">

                            </a>
                            <a href="<?php echo base_url(); ?>index.php/cardapio_controller/delete">
                                <input type="image" src="<?php echo base_url(); ?>assets/images/icons-delete-64.png" class="iconTable">
                            </a>
                        </td>
                    <?php endforeach; ?>
                </tr>  
            <tfoot>
                <tr>
                    <td colspan="10">
                        <div class="links">
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </td>
                </tr>
            </tfoot>
            </tbody>
            <?php
        } else {
            echo "<div id=\"failMessage\"> <h4 > Nehum item cadastrado </h4> </div>";
        }
        ?>

    </table>
</div>

<!-- Modal -->

<div id="pagina1" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

                            <?= form_open('cardapio_controller/store') ?>
                            <?php //echo validation_errors() ?>
                            <div class="form-group">
                                <?php echo form_error('data'); ?>
                                <label for="data">Data:</label>
                                <input type="text" name="data" placeholder="Ex.: dd/mm/aaaa" id="data" class="form-control" autofocus='true' requiried="true" value="<?= set_value('data') ?>"/>
                            </div>
                            <div class="form-group">
                                <?php echo form_error('nomeCardapio'); ?>
                                <label for="nomeCardapio">Nome :</label>
                                <input type="text" name="nomeCardapio" id="nomeCardapio" class="form-control" autofocus='true' requiried="true" value="<?= set_value('nomeCardapio') ?>"/>
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

