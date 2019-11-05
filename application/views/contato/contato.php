<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="container-fluid">
    
<head><meta charset="UTF-8"></head>
<form action="http://formmail.kinghost.net/formmail.cgi" method="POST"> 
 <input type="hidden" name="recipient" value="testeiseuemail@gmail.com"> <!-- Pode ser qualquer endereço de email -->
 <input type="hidden" name="redirect" value="http://seudominio"> <!-- Após o envio, o usuário será redirecionado para a página configurada aqui -->
 <input type="hidden" name="subject" value="teste de assunto">  <!-- Assunto da mensagem -->
 <input type="hidden" name="email" value="email@doseudominio">   <!-- Deve ser uma conta de email ativa em seu domínio -->
 
    
          <div class="text-right">
            <?= form_open('contato_controller/mostrar') ?>
            <?php //echo validation_errors() ?>
                <div class="form-group col-md-4">
            <div class="form-group">
                <?php echo form_error('nomeColaborador'); ?>
                <label for="nomeColaborador">Nome</label>
                <input type="text" name="nomeColaborador" id="nomeColaborador" class="form-control" autofocus='true' requiried="true" />
            </div>
            <br>
            <div class="form-group">
                <?php echo form_error('eMail'); ?>
                <label for="eMail">E-mail</label>
                <input type="text" name="replyto" id="eMail" class="form-control" autofocus='true' requiried="true" />
            </div>                    
            <br>
            <div class="form-group">
                <?php echo form_error('texto'); ?>
                <label for="texto">Comentários</label>
                <textarea class="form-control" id="texto" rows="3" autofocus='true' requiried="true"></textarea>
            </div>
                
                </div>  
            <div class="form-group">
            <div class="text-right col-md-4"> 
            <input type="submit" name="BTEnvia" value="Enviar"> 
            <input type="reset" name="BTApaga" value="Apagar"> </p> 
            </form>
</div>
    
    <?= form_close(); ?>
</div>