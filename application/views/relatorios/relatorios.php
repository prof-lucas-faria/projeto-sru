<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="container-fluid">

    <form action="<?= base_url('index.php/relatorios_controller/resultado/') ?>" method="post"> 

      <div class="text-right">
            <?= form_open('relatorios_controller/datar') ?>
            <?php //echo validation_errors() ?>
                <div class="form-group col-md-4">
                <?php echo form_error('data'); ?>
                <label for="data">Data e Hora Inicial</label>
                    <input  type="datetime-local" autocomplete="off"  max="24:00" onmousedown="formata_data()" name="dataHoraI"  placeholder="dd/mm/aaaa" id="dataHoraI"  autofocus='true' requiried="true" value="<?= set_value('dataHoraI') ?>"/>
                    <span class="glyphicon glyphicon-calendar "></span>
                </div>

                <div class="form-group col-md-4">
                <?php echo form_error('data'); ?>
                <label for="data">Data e Hora Final</label>
                    <input  type="datetime-local" autocomplete="off"  max="24:00" onmousedown="formata_data()" name="dataHoraF" placeholder="dd/mm/aaaa" id="dataHoraF"  autofocus='true' requiried="true" value="<?= set_value('dataHoraF') ?>"/>
                    <span class="glyphicon glyphicon-calendar "></span>
                </div>
        </div>
        </div>
    <br>
        <div class="form-group col-md-4">
          <label for="radios"><h4>SELECIONE O TIPO DA CONSULTA:</h4></label>
    <br>    
    
        <div class="form-check">
            <?php echo form_error('nomeCardapio'); ?>
            <input class="form-check-input" type="radio" name="Consulta" id="relatorio1" value="opcao1" checked>
            <label class="form-check-label" for="relatorio1">
            Consulta QTDE Refeição Por Genero
            </label>
        </div>
        <br>   
        <div class="form-check">
            <?php echo form_error('genero'); ?>
            <input class="form-check-input" type="radio" name="Consulta" id="relatorio2" value="opcao2">
            <label class="form-check-label" for="relatorio2">
            Consulta QTDE Refeição
            </label>
        </div>
        <br>

        <div class="form-check">
            <?php echo form_error('genero'); ?>
            <input class="form-check-input" type="radio" name="Consulta" id="relatorio3" value="opcao3">
            <label class="form-check-label" for="relatorio3">
            Consulta QTDE Refeição Por Curso
            </label>
        </div>
        <br>
       
        <div class="form-check">
            <?php echo form_error('genero'); ?>
            <input class="form-check-input" type="radio" name="Consulta" id="relatorio4" value="opcao4">
            <label class="form-check-label" for="relatorio4">
            Consulta QTDE Refeição Por Cidade
            </label>
        </div>
        <br>

        </div>
                
            <div class="form-row homeBusca">    
        <div class="text-right col-md-4">                          
                <button type="submit" class="btn-lg btn-danger">Gerar</button>            
    </form>
    </div>
        </div>       

<input type='hidden' name="id" value="<?= set_value('id') ?: (isset($id) ? $id : ''); ?>">
            <?= form_close(); ?>
</div>
        