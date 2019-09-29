<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<! Sessão do Menu Buscar >

<section id="buscar" class="ligth-bg campoBusca">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="form-row">    

            <div class="form-group col-md-3">

                <input id="busca" name="busca" placeholder="Digite a matrícula" class="form-control" type="text">

            </div>

            <div class="form-group col-md-3">
                <button  type="submit"  class="btn btn-danger">Buscar</button>
            </div>

        </div>    
    </form>   
</section>

<! Sessão de teste para a realizar as funções de Cardápio >

<section id="cardapio" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
                            <h2>Cardapio</h2>
                        </div>
                    </div>
                </div>
            </div>	
            <div class="container">
				<div class="row">
					<div>
						<div>
                        <table class='table'>
                            <tr>
                                <th>Matricula</th>
                                <th>Nome</th>
                                <th>Genero</th>
                                <th>CidadeOrigem</th>
                                <th>Curso</th>
                                <th>Ação</th>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>	
        </section>
        
        

<! Esta sessão traz o reultado da consulta do metodo listarNome do modelo Usuario_model >

<!-- <div class="container">
        <table class='table'>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Genero</th>
                <th>CidadeOrigem</th>
                <th>Curso</th>
                <th>Ação</th>
            </tr>
            
            <?php foreach ($listagem as $resultado) : ?>
            
            <tr>                
                <td><?= $resultado['matricula']?></td>
                <td><?= $resultado['nome']?></td>
                <td><?= $resultado['genero']?></td>
                <td><?= $resultado['cidadeOrigem']?></td>
                <td><?= $resultado['curso']?></td>

            <?php endforeach; ?>

            </tr>
        </table>
    </div>  -->


<! Esta sessão traz os dados em forma de tabela feita na consulta listarTodos do modelo
Usuario_model >

<!-- <div class="container">
        <table class='table'>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Genero</th>
                <th>CidadeOrigem</th>
                <th>Curso</th>
                <th>Ação</th>
            </tr>
            
            <?php foreach ($usuarios as $usuario) : ?>
            
            <tr>                
                <td><?= $usuario['matricula']?></td>
                <td><?= $usuario['nome']?></td>
                <td><?= $usuario['genero']?></td>
                <td><?= $usuario['cidadeOrigem']?></td>
                <td><?= $usuario['curso']?></td>

            <?php endforeach; ?>

            </tr>
        </table>
    </div>    -->
    
    
        <! Sessão do listar colaboradores >

<!-- <section id="buscar" class="ligth-bg campoBusca">
    <div class="form-row">    
        <div class="form-group col-md-3">
            <input id="busca" name="busca" placeholder="Digite o nome" class="form-control" type="text">
        </div>
        <div class="form-group col-md-3">
            <button  type="button"  class="btn btn-danger">Listar</button>
        </div>        
    </div>    
</section> -->


<<<<<<< HEAD
    <! Sessão da listagem de colaboradores >
=======
<!-- <div class="container">
        <table class='table'>
            <tr>
                <th>Nome do Colaborador</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Curso</th>
                <th>Perfil</th>
            </tr>
            
            <?php
             
            foreach ($acessos as $colaboradores) : ?>
            
            <tr>                
                <td><?= $colaboradores['nomeColaborador']?></td>
                <td><?= $colaboradores['cpf']?></td>
                <td><?= $colaboradores['eMail']?></td>
                <td><?= $colaboradores['curso']?></td>

            <?php endforeach; ?>

            </tr>
        </table>
    </div> -->

    <! Sessão do resultado da pesquisa >
>>>>>>> 6563ee185aca7ee11141092fd1581ef50aafb893

    <!-- <section id="pesquisa" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
                            <h2> Listagem de Colaboradores </h2>	
                            
                            <table class='table'>
                                <tr>
                                    <th>Nome do Colaborador</th>
                                    <th>CPF</th>
                                    <th>E-mail</th>
                                    <th>Curso</th>
                                    <th>Perfil</th>
                                </tr>
                                
                                <?php 
                                
                                $contador = 0;
                                
                                
                                foreach ($colaboradores as $lista) : 
                                $contador++; 
                                ?>
                                <tr>                
                                    <td><?= $lista['nomeColaborador']?></td>
                                    <td><?= $lista['cpf']?></td>
                                    <td><?= $lista['eMail']?></td>
                                    <td><?= $lista['curso']?></td>

                                <?php endforeach; ?>

                                </tr>
                                
                            </table>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    Total de registros: <?php echo $contador ?>
                                </div>
                            </div>

						</div>
					</div>
				</div>				
			</div>
			
		</section> -->