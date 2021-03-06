<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>



<?php
include("BuscarUsuario.php");

if ($listagem) {
    ?>
    <div class="container table-responsive tabelaUsuario">
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
                            <a href="<?php echo base_url(); ?>index.php/movimento_controller/entrada/<?= $resultado->idUsuario ?>">
                                <input type="image" src="<?php echo base_url(); ?>assets/images/entrada.png" class="iconTable">

                            </a>
                            <a href="<?php echo base_url(); ?>index.php/movimento_controller/saida/<?= $resultado->idUsuario ?>">
                                <input type="image" src="<?php echo base_url(); ?>assets/images/saida.png" class="iconTable">
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
        }else {
            echo "<div class=\"alert alert-danger\" id=\"failMessage\"> <h4 > Nehum usuário cadastrado </h4> </div>";
        }
        ?>
    </table>



</div>

