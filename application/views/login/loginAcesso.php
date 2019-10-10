<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="container-fluid">

    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            
            <?= form_open('login_controller/autenticar/') ?>
            <?php //echo validation_errors() ?>   
            
            <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>
        
            <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>        
            <?php endif ?>

            
        <title>Login</title>
        <strong>Entre com o usuário</strong> <!--Cabeçalho -->
    </div>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="opcao1" checked>
                <label class="form-check-label" for="gridRadios1">
                  Administrador
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="opcao2">
                <label class="form-check-label" for="gridRadios2">
                  Nutricionista
                </label>
              </div>  
                
  </br>
        <div class="col-sm-12">
          <?php echo form_error('eMail'); ?>            
          <input type="eMail" class="form-control" id="email" placeholder="Digite o email" name="eMail" value="<?= set_value('eMail') ?>"> <!--Autofocus= Assim que a página abre, já cai dentro do campo email -->
        </div>

  </br>
        <div class="col-sm-12">
          <?php echo form_error('senha'); ?>            
          <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha" value="<?= set_value('senha') ?>" >
        </div>

      <div class="checkbox">
        <label>
          <input type="checkbox" value="esqueci">Esqueci a senha
        </label>
      </div>

    <div class="col-sm-15">
        <div class="dropdown-menu drop-content">
            <a href="<?= base_url('index.php/usuario/BuscarUsuario.php/') ?>"><h6>Criar novo usuário</h6></a>
        </div>        
    </div>

      <div class="form-group">
          <button type="submit" class="btn btn-lg btn-primary btn-block">
            <a href="<?= base_url('index.php/acesso_controller/resultadoAcesso/') ?>"><h6>Acessar</button> <!--btn-block- Coloca o botão para a página toda (Classe do próprio Bootstrap) -->
      </div>
        </div>  

        </div>
    </div>
</div>
 <?= form_close(); ?>