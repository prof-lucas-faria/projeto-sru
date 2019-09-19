<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<! Sessão do Menu Buscar >

<section id="buscar" class="ligth-bg campoBusca">
    <div class="form-row">    
        <div class="form-group col-md-3">
            <input id="busca" name="busca" placeholder="Digite a matrícula" class="form-control" type="text">
        </div>
        <div class="form-group col-md-3">
            <button  type="button"  class="btn btn-danger">Buscar</button>
        </div>        
    </div>    
</section>

<! Esta sessão traz os dados em forma de tabela feita na consulta listarTodos do modelo
Usuario_model >

<div class="container">
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
    </div>

    <! Sessão do resultado da pesquisa >

    <section id="pesquisa" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
                            <h2>Resultado da Pesquisa</h2>	
                            
                            <table class='table'>
                                <tr>
                                    <th>Matricula</th>
                                    <th>Nome</th>
                                    <th>Genero</th>
                                    <th>CidadeOrigem</th>
                                    <th>Curso</th>
                                    <th>Ação</th>

                                </tr>
                                
                                <?php foreach ($listagem as $lista) : ?>
                                
                                <tr>                
                                    <td><?= $lista['matricula']?></td>
                                    <td><?= $lista['nome']?></td>
                                    <td><?= $lista['genero']?></td>
                                    <td><?= $lista['cidadeOrigem']?></td>
                                    <td><?= $lista['curso']?></td>

                                <?php endforeach; ?>

                                </tr>
                                
                            </table>

						</div>
					</div>
				</div>				
			</div>
			
		</section>