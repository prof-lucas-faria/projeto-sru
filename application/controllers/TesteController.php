<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TesteController extends CI_Controller {

    public function index() {
        $data['listaDeCardapio'] = $this->cardapio_model->listarPorId(2);
        $data['titulo'] = 'teste';
        $this->template->show('teste', $data);
        
    }

}
