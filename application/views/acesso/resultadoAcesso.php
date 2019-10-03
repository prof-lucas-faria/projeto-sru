<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="container table-responsive">
    <table class="table  table-hover">
        <?php if ($listagem->result()) { ?> <!--Se houver item na tabela mostra-->
            <tr class="tr">
                <th>Nome do Colaborador</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Perfil</th>
                <th>Ação</th>
            </tr>

            <tbody id="tbody">
                <?php foreach ($listagem->result() as $resultado) : ?>
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

<div class="form-row campoBusca">    

    <div class="form-group form-inline">
        <form action="<?= base_url('index.php/acessocontroller/resultadoAcesso/') ?>" method='post'>
        
            <input id="busca" name="busca" placeholder="Digite o nome" class="form-control" type="text">           
        
            <button type="submit" class="btn btn-danger">Buscar</button>
            
        </form>
    </div>

</div>
