<div id="pagina1" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                <input type="date" onkeypress="jQuery("#data").mask("99/99/9999")" name="data" id="data" class="form-control" autofocus='true' requiried="true"/>
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
