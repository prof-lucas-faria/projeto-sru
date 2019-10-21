<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Acesso_controller extends CI_Controller {
    
    public function index() {                
 
        //$data['titulo'] = "Acesso Restrito"; //titulo da página
        //$this->template->show('acesso/resultadoAcesso', $data);
        
    }

    public function resultadoAcesso(){

        $this->load->model('acesso_model');

        if (!empty($_POST['busca'])) {
            if ($_POST['busca'] != "") {
        $this->load->model('acesso_model');

                $data['listagemDeAcesso'] = $this->acesso_model->getMatricula($_POST['busca']);
            }
        } else {

            $config['base_url'] = base_url() . 'index.php/acesso_controller/resultadoAcesso/';
            $config['total_rows'] = $this->acesso_model->get_count();
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;

            $config['first_link'] = 'Primeira';
            $config['last_link'] = 'Última';
            $config['cur_tag_open'] = '<a>';

            $config['cur_tag_close'] = '</a>';

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            $data['listagemDeAcesso'] = $this->acesso_model->get_limite($config["per_page"], $page);
            $this->pagination->initialize($config);
        }
        $data['titulo'] = "Acesso Restrito"; //titulo da página
        $this->template->show('acesso/resultadoAcesso', $data);
    }
    
}
