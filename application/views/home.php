<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<section id="portfolio" class="ligth-bg campoBusca">
    <div class="form-row">
        <div class="form-group col-md-3">
            <input id="nome" name="descricao" placeholder="Digite a matrícula" class="form-control" type="text">
        </div>
        <div class="form-group col-md-3">
            <button type="button" class="btn btn-danger">Buscar</button>
        </div>
        
    </div>    
</section>

<! Esta sessão traz os dados em forma de tabela feita na consulta BuscarNome do modelo
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