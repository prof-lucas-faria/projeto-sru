<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!--<div class="btn-group-sm btn-group grupoBotoes">

    <a href="<?= base_url('index.php/cardapio_controller/novo') ?>">
        <button type="button"  class="btn btn-success btn_modal" >Novo<img class="imgNew" src="<?= base_url('assets/images/new_item.png') ?>" ></button>
    </a>
</div>-->


<!-------------Tabela listar Cardápio---------->
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
                            <a >
                                <input type="image" onclick="" data-toggle="modal" data-target=".bd-example-modal-sm" src="<?php echo base_url(); ?>assets/images/icons-delete-64.png" class="iconTable">

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
            echo "<div class=\"alert alert-danger\" id=\"failMessage\"> <h4 > Nehum item cadastrado </h4> </div>";
        }
        ?>

    </table>
</div>
<!-------------FIM da Tabela listar Cardápio---------->


<!-------------Modal Confirmar---------->
<?php include 'modalConfirmar.php';?>
<!-------------Fim Modal Confirmar ---------->
<!-- Modal Editar -->
<?php include 'modalEditar.php';?>
<!-------------Fim Modal Editar  ---------->