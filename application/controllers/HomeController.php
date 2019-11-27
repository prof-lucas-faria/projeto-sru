<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function index()
    {
        if (!$_SESSION['tipoCardapioEscolhido']) {
            $_SESSION['tipoCardapioEscolhido'] = '1';
        } else {
            $data['tipoCardapioEscolhido'] = $_SESSION['tipoCardapioEscolhido'];
        }

        $data['tiposCardapio'] = $this->cardapio_model->getTiposCardapio();

        $data['titulo'] = "Home"; //titulo da página
        $this->template->show('usuario/BuscarUsuario', $data);
    }

    public function resultado()
    {

        $this->load->model('usuario_model');
        $data['tipoCardapioEscolhido'] = $_SESSION['tipoCardapioEscolhido'] = $this->input->post('tipoCardapio'); //tipo recebido da view

        $data['tiposCardapio'] = $this->cardapio_model->getTiposCardapio();
        if (!empty($_POST['busca'])) {
            if ($_POST['busca'] != "") {

                $data['listagem'] = $this->usuario_model->getMatricula($_POST['busca']);
            }
        } else {

            $config['base_url'] = base_url() . 'index.php/homeController/resultado/';
            $config['total_rows'] = $this->usuario_model->get_count();
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;

            $config['first_link'] = 'Primeira';
            $config['last_link'] = 'Última';
            $config['cur_tag_open'] = '<a>';

            $config['cur_tag_close'] = '</a>';

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            $data['listagem'] = $this->usuario_model->get_limite($config["per_page"], $page);
            $this->pagination->initialize($config);
        }
        $data['titulo'] = "Pesquisa"; //titulo da página
        $this->template->show('usuario/resultadoBusca', $data);
    }

}
