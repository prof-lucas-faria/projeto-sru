<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <h1 class="text-center">Erro</h1>
    <div class="col-md-12">
        <div class="row">
            <div class="alert alert-danger text-center">
                <?= $mensagem; ?>
            </div>
        </div>
        <div class="row text-center"> <a href="../" class="btn btn-info">Voltar</a>
        </div>
    </div>	
</div>