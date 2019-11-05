<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato_controller extends CI_Controller {
    
    public function index() {                
       
    }

    public function mostrar() {

        $this->load->model('contato_model');

        $data['titulo'] = "Entrar em Contato"; //titulo da página
        $this->template->show('contato/contato', $data);
    }
}