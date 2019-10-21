<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="container-fluid">

    <div class="col-md-5 col-md-offset-3">
        <div class="row">


            <?php if ($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>

            <?php if ($this->session->flashdata("danger")) : ?>
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

            <?= form_open('login_controller/acao/') ?>

            <div class="form-group">
                <?php echo form_error('eMail'); ?>            
                <input type="text" class="form form-control" id="eMail" placeholder="Digite o email" name="eMail" value="<?= set_value('eMail') ?>"> <!--Autofocus= Assim que a página abre, já cai dentro do campo email -->


                <input type="password" class="form form-control" id="senha" placeholder="Digite a senha" name="senha" " >
                <?php echo form_error('senha'); ?> 
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="esqueci">Esqueci a senha
                </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">
                    <h6>Acessar</h6></button> <!--btn-block- Coloca o botão para a página toda (Classe do próprio Bootstrap) -->
            </div>

        </div>
    </div>

</div>
<?= form_close(); ?>