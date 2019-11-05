<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios_controller extends CI_Controller {
    
    public function index() {                
       
    }

    public function datar() {

        $this->load->model('relatorios_model');

        $data['titulo'] = "Relatórios- Por Data e Hora"; //titulo da página
        $this->template->show('relatorios/relatorios', $data);
    }
    
    public function resultado() {

        $this->load->model('relatorios_model');

        if (!empty($_POST['busca'])) {
            if ($_POST['busca'] != "") {

                $data['listagem'] = $this->relatorios_model->getMatricula($_POST['busca']);
            }
        } else {

            $config['base_url'] = base_url() . 'index.php/relatorios_controller/resultado/';
            $config['total_rows'] = $this->relatorios_model->get_count();
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;

            $config['first_link'] = 'Primeira';
            $config['last_link'] = 'Última';
            $config['cur_tag_open'] = '<a>';

            $config['cur_tag_close'] = '</a>';

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            $data['listagem'] = $this->relatorios_model->get_limite($config["per_page"], $page);
            $this->pagination->initialize($config);
        }
        $data['titulo'] = "Resultado Relatório"; //titulo da página
        $this->template->show('relatorios/resultadoRelatorio', $data);
    }
}

