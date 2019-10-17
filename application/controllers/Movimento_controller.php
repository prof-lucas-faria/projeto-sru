<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Movimento_controller extends CI_Controller
{

    public function index(){

        
        
    }

   
    public function entrada($idUsuario){

        $this->load->model('movimento_model');

        // $data['listagem'] = $this->movimento_model->setEntrada();

        $query = $this->movimento_model->setEntrada($idUsuario);

        $data['listagem'] = $query;

        $data['titulo'] = "ENTRADA"; //titulo da página
        $this->template->show('movimento/Entrada', $data);

    }


    public function saida(){

        $this->load->model('movimento_model');

        $data['titulo'] = "SAÍDA"; //titulo da página
        $this->template->show('movimento/Saida', $data);

    }
}