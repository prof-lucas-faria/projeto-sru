<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcessoRestrito extends CI_Controller {
    
	public function index()
	{
            //Carrega o model e apelido para o model
            $this->load->model('AcessoRestrito_model', 'colaboradores');
            
            //Pega dados do model
            $data['colaboradores'] = $this->colaboradores->getColaboradores();
            
            // Carrega somente a View listaColaboradores
            $this->load->view('listaColaboradores', $data);

            // Carrega todos os templates dentro da View
            //$this->template->show('listaColaboradores');
	}

    
}
