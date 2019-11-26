<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-------------Tabela listar Cardápio---------->
<div class="container table-responsive">
    <table class="table  table-hover">
        <?php if ($listaDeCardapio) { ?> <!--Se houver item na tabela mostra-->
            <tr class="tr">
                <th scope="row">Data</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Prato principal</th>
                <th>Guarnição</th>
                <th>Acompanhamento</th>
                <th>Salada</th>
                <th>Sobremesa</th>
                <th>Suco</th>
                <th>Ação</th>
            </tr>
            <tbody id="tbody">
            <?php foreach ($listaDeCardapio

            as $cardapio) : ?>
            <tr>
                <td><?php
                    $dataConv = new DateTime($cardapio->data);
                    echo $dataConv->format('d-M-Y');
                    ?></td>

                <td><?php echo $cardapio->nomeCardapio; ?></td>
                <td>
                    <?php
                    foreach ($this->cardapio_model->getTiposCardapio() as $i => $tipos) {
                        if ($cardapio->idTipoCardapio == $i) {
                            echo $tipos;
                        }
                    }
                    ?>
                </td>
                <td><?php echo $cardapio->pratoPrincipal; ?></td>
                <td><?php echo $cardapio->guarnicao; ?></td>
                <td><?php echo $cardapio->acompanhamento; ?></td>
                <td><?php echo $cardapio->salada; ?></td>
                <td><?php echo $cardapio->sobremesa; ?></td>
                <td><?php echo $cardapio->suco; ?></td>
                <td>
                    <a onclick="loadModal()"
                       data-whatever="<?php echo $cardapio->idCardapio ?>"
                       data-whatevertipo="<?php
                       foreach ($this->cardapio_model->getTiposCardapio() as $i => $tipos) {
                           if ($cardapio->idTipoCardapio == $i) {
                               echo $tipos;
                           }
                       }
                       ?>"
                       data-whateverdata="<?php echo $cardapio->data ?>"
                       data-whateverguar="<?php echo $cardapio->guarnicao ?>"
                       data-whatevernome="<?php echo $cardapio->nomeCardapio; ?>"
                       data-whateverprato="<?php echo $cardapio->pratoPrincipal; ?>"
                       data-whateveracom="<?php echo $cardapio->acompanhamento; ?>"
                       data-whateversalada="<?php echo $cardapio->salada; ?>"
                       data-whateversobre="<?php echo $cardapio->sobremesa; ?>"
                       data-whateversuco="<?php echo $cardapio->suco; ?>" data-toggle="modal"
                       data-target=".bd-example-modal-lg">
                        <input onclick="" type="image"
                               src="<?php echo base_url('assets/images/icons-edit-64.png'); ?>"
                               class="iconTable btn btn-sm">
                    </a>

                    <a onclick="link_deletar()" data-whateverdeletar="<?php echo $cardapio->idCardapio ?>"
                        <img data-toggle="modal" data-target=".bd-example-modal-sm"
                             src="<?php echo base_url('assets/images/icons-delete-64.png'); ?>"
                             class="iconTable btn btn-sm">
                    </a>
                </td>
                <?php endforeach; ?>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="10">
                    <div class="links">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </td>
            </tr>
            </tfoot>

            <?php
        } else {
            echo "<div class=\"alert alert-danger\" id=\"failMessage\"> <h4 > Nehum item cadastrado </h4> </div>";
        }
        ?>

    </table>
</div>
<!-------------FIM da Tabela listar Cardápio---------->

<!-------------Modal Confirmar---------->
<?php include 'modais/modalConfirmar.php'; ?>
<!-------------Fim Modal Confirmar ---------->

<!-- Modal Editar -->
<?php include 'modais/modalEditar.php'; ?>
<!-------------Fim Modal Editar  ---------->
