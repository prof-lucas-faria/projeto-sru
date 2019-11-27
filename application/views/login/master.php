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