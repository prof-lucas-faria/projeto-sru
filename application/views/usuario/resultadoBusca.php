<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="container table-responsive">
    <table class="table  table-hover">

        <tr class="tr">
            <th>Matricula</th>
            <th>Nome</th>
            <th>Genero</th>
            <th>Cidade</th>
            <th>Curso</th>
            <th>Ação</th>
        </tr>

        <tbody id="tbody">
            <?php foreach ($listagem as $resultado) : ?>
                <tr>
                    <td><?php echo $resultado->matricula; ?></td>
                    <td><?php echo $resultado->nome; ?></td>
                    <td><?php echo $resultado->genero; ?></td>
                    <td><?php echo $resultado->cidadeOrigem; ?></td>
                    <td><?php echo $resultado->curso; ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/cardapio_controller/store">
                            <input type="image" src="<?php echo base_url(); ?>assets/images/icons-edit-64.png" class="iconTable">

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
                    <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                </td>
            </tr>
        </tfoot>
        </tbody>
        <?php
        ?>

    </table>

</div>

<div class="form-row campoBusca">

    <div class="form-group form-inline">
        <form action="<?= base_url('index.php/homecontroller/resultado/') ?>" method='post'>

            <input id="busca" name="busca" placeholder="Digite a matrícula" class="form-control" type="text">

            <button type="submit" class="btn btn-danger">Buscar</button>

        </form>
    </div>

</div>