<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<?php
if ($listagemDeAcesso) {
    ?>
    <div class="container table-responsive">
        <table class="table  table-hover">

            <tr class="tr">
                <th>Nome do Colaborador</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Perfil</th>
                <th>Ação</th>
            </tr>
            <tbody id="tbody">
                <?php foreach ($listagemDeAcesso->result() as $resultado) : ?>
                    <tr>              
                        <td><?php echo $resultado->nomeColaborador; ?></td>
                        <td><?php echo $resultado->cpf; ?></td>
                        <td><?php echo $resultado->eMail; ?></td>
                        <td><?php echo $resultado->senha; ?></td>
                        <td><?php echo $resultado->Perfil_idPerfil; ?></td>                        
                        <td>
                            <a href="<?php echo base_url(); ?>index.php/cardapio_controller/store">
                                <input type="image"  src="<?php echo base_url(); ?>assets/images/icons-edit-64.png" class="iconTable">

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
            echo "<div id=\"failMessage\"> <h4 > Nenhum item cadastrado </h4> </div>";
        }
        ?>

    </table>

</div>

<div class="form-row campoBusca">    

    <div class="form-group form-inline">
        <form action="<?= base_url('index.php/acesso_controller/resultadoAcesso/') ?>" method='post'>

            <input id="busca" name="busca" placeholder="Digite o nome" class="form-control" type="text">           

            <button type="submit" class="btn btn-danger">Buscar</button>

        </form>
    </div>

</div>
