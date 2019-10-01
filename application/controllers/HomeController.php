<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index() {
        $data['titulo'] = "Home";
        $this->template->show('usuario/BuscarUsuario', $data);
        // teste
    }

}