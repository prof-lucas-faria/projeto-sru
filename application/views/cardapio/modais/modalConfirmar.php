<div id="modalDelete" class="modal modalEditar container-fluid fade bd-example-modal-sm" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm ">
        <div class="modal-content ">
            <div class="btn-group-sm">
                <div class="modal-body">
                    <h4>Confirmar?</h4>
                    <form method="post" id="formDeletar" action="<?php echo base_url('index.php/cardapio_controller/delete');?>">
                        <input type="submit" value="Confirmar" class="btn btn-success"/>
                        <input hidden type="text" id="iddeletar" name="iddeletar">
                        <input type="button" src="" value="Cancelar" data-dismiss="modal" class="btn btn-danger "/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>