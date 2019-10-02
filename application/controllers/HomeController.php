<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index() {        
        
        $this->load->model('usuario_model');

        $data['usuarios'] = $this->usuario_model->listarTodos();
        
        $data['titulo'] = "Home"; //titulo da página
        $this->template->show('usuario/BuscarUsuario', $data);
    }

    public function resultado(){

        $this->load->model('usuario_model');

        $data['listagem'] = $this->usuario_model->listarMatricula($_POST);
        
        $data['titulo'] = "Home"; //titulo da página
        $this->template->show('usuario/resultadoBusca', $data);

    }

}