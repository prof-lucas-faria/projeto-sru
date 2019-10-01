<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="btn-group-lg btn-group grupoBotoes">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Novo<img class="imgNew" src="../../../public/images/new_item.png" width=40 height=20></button>
</div>
<div class="container table-responsive">
    <table class="table  table-hover greenTable">
        <?php if ($listaDeCardapio->result()) { ?> <!--Se houver item na tabela mostra-->
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
                <?php foreach ($listaDeCardapio->result() as $cardapio) : ?>
                    <tr>                
                        <td><?php echo $cardapio->data; ?></td>
                        <td><?php echo $cardapio->nomeCardapio; ?></td>
                        <td><?php echo $cardapio->pratoPrincipal; ?></td>
                        <td><?php echo $cardapio->guarnicao; ?></td>
                        <td><?php echo $cardapio->acompanhamento; ?></td>
                        <td><?php echo $cardapio->salada; ?></td>
                        <td><?php echo $cardapio->sobremesa; ?></td>
                        <td><?php echo $cardapio->suco; ?></td>
                        <td><?php echo "BOTOES" ?></td>

                    <?php endforeach; ?>

                </tr>  
            <tfoot>
                <tr>
                    <td colspan="10">
                        <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"><link href="<?= base_url() ?>public/css/estilo.css" rel="stylesheet">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Adicionar novo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container-fluid">
                    <h4 class="text-center">Cardapio</h4>
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
                                <input type="guarnicao" name="guarnicao" id="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="acompanhamento">Acompanhamento</label>
                                <input type="acompanhamento" name="acompanhamento" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="salada">Salada</label>
                                <input type="salada" name="salada" id="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="sobremesa">Sobremesa</label>
                                <input type="sobremesa" name="sobremesa" id="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="suco">Suco</label>
                                <input type="suco" name="suco" id="email" class="form-control" />
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

                <div class="modal-footer container-fluid">                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                </div>
            </div>

        </div>
    </div>
</div>