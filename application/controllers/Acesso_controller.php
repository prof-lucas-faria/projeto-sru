<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Acesso_controller extends CI_Controller {
        public function index() {        
        
        $this->load->model('acesso_model', 'colaboradores');

        $data['colaboradores'] = $this->acesso_model->getColaboradores();
        
        $data['titulo'] = "Login"; //titulo da página
        $this->template->show('acesso/listarColaborador', $data);
    }

    public function resultadoAcesso(){

        $this->load->model('acesso_model');

        $data['listagem'] = $this->acesso_model->getNome();
        
        $data['titulo'] = "Acesso Restrito"; //titulo da página
        $this->template->show('acesso/resultadoAcesso', $data);

    }
}
