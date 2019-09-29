<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index() {

        // Carrega somente a View BuscarUsuário
        // $this->load->view('BuscarUsuario');
        
        // Faz a leitura do Modelo Usuario_model
        $this->load->model('usuario_model');
        
        // dados['usuarios'] ira receber a consulta feita no metodo listarTodos que esta
        //localizado no model Usuario_model
        $dados['usuarios'] = $this->usuario_model->listarTodos();

        // Carrega todos os templates dentro da View
        $this->template->show('home', $dados);

 	
        //Carrega o model e apelida o model
        $this->load->model('acesso_model', 'colaboradores');

        //Pega dados do model
        $dados['colaboradores'] = $this->colaboradores->getColaboradores();
    }

    // Função que buscará o metodo listarNome da model Usuario_model
    public function pesquisaUsuario() {

        $this->load->model('usuario_model');

        $dados['listagem'] = $this->usuario_model->listarNome($_POST);

        $this->template->show('home', $dados);
    }

    public function pesquisaColaborador() {

        $this->load->model('acesso_model');

        $dados['listagem'] = $this->acesso_model->listarColaborador($_POST);

        $this->template->show('home', $dados);
    }

}
