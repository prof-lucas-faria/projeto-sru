<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function index(){

        $data['titulo'] = "Home"; //titulo da página
        $this->template->show('usuario/BuscarUsuario', $data);
    }

    public function resultado(){

        $this->load->model('usuario_model');

        $data['listagem'] = $this->usuario_model->getMatricula($_POST['busca']);

        $data['titulo'] = "Pesquisa"; //titulo da página
        $this->template->show('usuario/resultadoBusca', $data);
    }
}