<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Movimento_controller extends CI_Controller
{

    public function index(){        
        
    }

   
    public function entrada($id){

        $this->load->model('movimento_model');
       
        $data['listagem'] = $this->movimento_model->setEntrada($id);        

        if ($data['listagem'] == true){            
            $variaveis['titulo'] = "Sucesso";
            $variaveis['mensagem'] = "Dados gravados com sucesso!";            
            $this->template->show('movimento/Entrada', $variaveis);

        }else {
            $variaveis['titulo'] = "Falha";
            $variaveis['mensagem'] = "Não existe Cardápio cadastrado para este dia.";
            $this->template->show('movimento/Entrada', $variaveis);
        }     

    }


    public function saida($id){

        $this->load->model('movimento_model');
       
        $data['listagem'] = $this->movimento_model->setSaida($id);        

        if ($data['listagem'] == true){            
            $variaveis['titulo'] = "Sucesso";
            $variaveis['mensagem'] = "Dados gravados com sucesso!";            
            $this->template->show('movimento/Saida', $variaveis);

        }else {
            $variaveis['titulo'] = "Falha";
            $variaveis['mensagem'] = "Não existe Cardápio cadastrado para este dia.";
            $this->template->show('movimento/Saida', $variaveis);
        }     

    }
}