<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio_controller extends CI_Controller {

    public function index() {
        
    }

    public function listar() {
       // $this->load->helper('form'); //CARREGA O HELPER DE FORMULARIO
        $data['titulo'] = "Cardápio"; //titulo da página
        
        $this->load->model('cardapio_model');//carrega o model cardapio
        $data['listaDeCardapio'] = $this->cardapio_model->get();
        $this->template->show('cardapio/listarCardapio_view', $data);
    }

    public static function getCardapioFromView() {//recebe via post os dados do formulario
        $cardapio = new Cardapio_model();

        $cardapio->__set('data', $this->input->post('data'));
        $cardapio->__set('nomeCardapio', $this->input->post('nomeCardapio'));
        $cardapio->__set('pratoPrincipal', $this->input->post('pratoPrincipal'));
        $cardapio->__set('guarnicao', $this->input->post('guarnicao'));
        $cardapio->__set('acompanhamento', $this->input->post('acompanhamento'));
        $cardapio->__set('salada', $this->input->post('salada'));
        $cardapio->__set('sobremesa', $this->input->post('sobremesa'));
        $cardapio->__set('suco', $this->input->post('suco'));
        return $cardapio;
    }

    /*
     * // validator() contem as regras que valida os campos do formulario
     * Um formulário é exibido.
     * Você o preenche e envia.  
     * Se você enviou algo inválido ou perdeu um item obrigatório, 
     * o formulário é exibido novamente, contendo seus dados, 
     * juntamente com uma mensagem de erro descrevendo o problema.
     *  Esse processo continua até que você envie um formulário válido.
     */

    public function validator() {
        $this->load->library('form_validation');
        $regras = array(
            array('field' => 'nomeCardapio', 'label' => 'Nome', 'rules' => 'required'),
            array('field' => 'pratoPrincipal', 'label' => 'Prato', 'rules' => 'required'),
            array('field' => 'guarnicao', 'label' => 'Guarnição', 'rules' => 'required'),
            array('field' => 'acompanhamento', 'label' => 'Acompanhamento', 'rules' => 'required'),
            array('field' => 'salada', 'label' => 'Salada', 'rules' => 'required'),
            array('field' => 'sobremesa', 'label' => 'Sobremesa', 'rules' => 'required'),
            array('field' => 'suco', 'label' => 'Suco', 'rules' => 'required')
        );
        $this->form_validation->set_rules($regras);
    }

    public function store() {
        $this->load->model('cardapio_model');
        $this->validator();
        if ($this->form_validation->run() == FALSE) {
            $data['titulo'] = 'Tente novamente';
            $data['listaDeCardapio'] = $this->cardapio_model->get();
            $this->template->show('cardapio/listarCardapio_view', $data);
        } else {

            $id = $this->input->post('id');

            //criação do objeto
//            $cardapio = new Cardapio_model();
//            $cardapio->__set('data', $this->input->post('data'));
//            $cardapio->__set('nomeCardapio', $this->input->post('nomeCardapio'));
//            $cardapio->__set('pratoPrincipal', $this->input->post('pratoPrincipal'));
//            $cardapio->__set('guarnicao', $this->input->post('guarnicao'));
//            $cardapio->__set('acompanhamento', $this->input->post('acompanhamento'));
//            $cardapio->__set('salada', $this->input->post('salada'));
//            $cardapio->__set('sobremesa', $this->input->post('sobremesa'));
//            $cardapio->__set('suco', $this->input->post('suco'));
            // array
            date_default_timezone_set('America/Sao_Paulo');
            $dados = [
                'data' => $this->input->post('data'),
                'nomeCardapio' => $this->input->post('nomeCardapio'),
                'pratoPrincipal' => $this->input->post('pratoPrincipal'),
                'guarnicao' => $this->input->post('guarnicao'),
                'acompanhamento' => $this->input->post('acompanhamento'),
                'salada' => $this->input->post('salada'),
                'sobremesa' => $this->input->post('sobremesa'),
                'suco' => $this->input->post('suco')
            ];

            if ($this->cardapio_model->store($dados, $id)) {
                $variaveis['titulo'] = "Sucesso";
                $variaveis['mensagem'] = "Dados gravados com sucesso!";
                $this->template->show('errors/v_sucesso', $variaveis);
            } else {
                $variaveis['titulo'] = "Falha";
                $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
                $this->template->show('errors/v_erro', $variaveis);
            }
        }
    }

}
