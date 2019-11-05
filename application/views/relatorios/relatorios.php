<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="container-fluid">

      <div class="text-right">
            <?= form_open('relatorios_controller/datar') ?>
            <?php //echo validation_errors() ?>
                <div class="form-group col-md-4">
                <?php echo form_error('data'); ?>
                <label for="data">Data e Hora Inicial</label>
                    <input  type="datetime-local" autocomplete="off" onmousedown="formata_data()" name="data" placeholder="dd/mm/aaaa" id="data"  autofocus='true' requiried="true" value="<?= set_value('data') ?>"/>
                    <span class="glyphicon glyphicon-calendar "></span>
                </div>

                <div class="form-group col-md-4">
                <?php echo form_error('data'); ?>
                <label for="data">Data e Hora Final</label>
                    <input  type="datetime-local" autocomplete="off" onmousedown="formata_data()" name="data" placeholder="dd/mm/aaaa" id="data"  autofocus='true' requiried="true" value="<?= set_value('data') ?>"/>
                    <span class="glyphicon glyphicon-calendar "></span>
                </div>
        </div>
        </div>
    <br>
        <div class="form-group col-md-4">
          <label for="radios"><h4>SELECIONE O RELATÓRIO QUE DESEJA GERAR:</h4></label>
    <br>
    
    <div class="form-check">
        <?php echo form_error('nomeCardapio'); ?>
        <input class="form-check-input" type="radio" name="relatorio" id="relatorio1" value="opcao1" checked>
        <label class="form-check-label" for="relatorio1">
        Cardápios Servidos
        </label>
    </div>
    <br>   
    <div class="form-check">
        <?php echo form_error('genero'); ?>
        <input class="form-check-input" type="radio" name="relatorio" id="relatorio2" value="opcao2">
        <label class="form-check-label" for="relatorio2">
        Usuários Sexo Masculino
        </label>
    </div>
    <br>
    <div class="form-check">
        <?php echo form_error('genero'); ?>
        <input class="form-check-input" type="radio" name="relatorio" id="relatorio3" value="opcao3">
        <label class="form-check-label" for="relatorio3">
        Usuários Sexo Feminino
        </label>
    </div>
    <br>
      <div class="form-check">
        <?php echo form_error('datetime-local'); ?>
        <label class="form-check-label" for="relatorio4">
        <input class="form-check-input" name="relatorio" id="relatorio4" value="opcao4" type="radio">
          Tempo Médio de Permanência
        </label>
      </div>
      <br>
      <div class="form-check">
        <?php echo form_error('nomeCardapio'); ?>
        <label class="form-check-label" for="relatorio5">
        <input class="form-check-input" name="relatorio" id="relatorio5" value="opcao5" type="radio">
          Almoços Consumidos
        </label>
      </div>
      <br>
      <div class="form-check">
        <?php echo form_error('nomeCardapio'); ?>
        <label class="form-check-label" for="relatorio6">
        <input class="form-check-input" name="relatorio" id="relatorio6" value="opcao6" type="radio">
          Jantares Consumidos
        </label>
      </div>
    </div>
            
        <div class="form-row homeBusca">    
    <div class="text-right col-md-4"> 
        <form action="<?= base_url('index.php/relatorios_controller/resultado/') ?>" method="post">                
            <button type="submit" class="btn-lg btn-danger">Buscar Dados</button>            
        </form>
    </div>
        </div>
       

<input type='hidden' name="id" value="<?= set_value('id') ?: (isset($id) ? $id : ''); ?>">
            <?= form_close(); ?>
</div>
        