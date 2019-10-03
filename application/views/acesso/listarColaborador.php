<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container table-responsive">
    <table class="table  table-hover">
        <?php if ($acessos->result()) { ?> <!--Se houver item na tabela mostra-->
            <tr class="tr">
                <th>Nome do Colaborador</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Perfil</th> 
                <th>Ação</th>                
            </tr>

            <tbody id="tbody">
                <?php foreach ($acessos->result() as $colaboradores) : ?>
                    <tr>                
                        <td><?php echo $colaboradores->nomeColaborador; ?></td>
                        <td><?php echo $colaboradores->cpf; ?></td>
                        <td><?php echo $colaboradores->eMail; ?></td>
                        <td><?php echo $colaboradores->senha; ?></td> 
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
            echo "<div id=\"failMessage\"> <h4 > Nenhum item cadastrado </h4> </div>";
        }
        ?>

    </table>

    <div class="form-row campoBusca">    

    <div class="form-group form-inline">
        <form action="<?= base_url('index.php/acessocontroller/resultadoAcesso/') ?>" method='post'>        
            <input id="busca" name="busca" placeholder="Digite o nome" class="form-control" type="text">        
            <button type="submit" class="btn btn-danger">Buscar</button>            
        </form>
    </div>

</div>

</div> 
