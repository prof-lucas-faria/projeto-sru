<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio_controller extends CI_Controller {

    public function index() {
        //$this->listar();
        
    }

    public function listar() {

        $config['base_url'] = base_url('index.php/cardapio_controller/listar');
        $config['total_rows'] = $this->cardapio_model->get_count();
        $config['per_page'] = 5;
        $config["uri_segment"] = 3;
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['cur_tag_open'] = '<a>';
        $config['cur_tag_close'] = '</a>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);

        $data['listaDeCardapio'] = $this->cardapio_model->get_limite($config["per_page"], $page);
        $data['titulo'] = 'Cardápio'; //titulo da página
        $this->template->show('cardapio/listarCardapio_view', $data);
    }

    public function listarPorId($id = NULL) {
        return $this->cardapio_model->listarPorId($id);
    }

    public function getCardapioFromView() {//recebe via post os dados do formulario
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

    public function validarFormulario() {
        $regras = array(
            array('field' => 'data', 'label' => 'Data', 'rules' => 'trim|required'),
            array('field' => 'nomeCardapio', 'label' => 'Nome', 'rules' => 'required'),
            array('field' => 'pratoPrincipal', 'label' => 'Prato', 'rules' => 'required'),
            array('field' => 'guarnicao', 'label' => 'Guarnição', 'rules' => 'required'),
            array('field' => 'acompanhamento', 'label' => 'Acompanhamento', 'rules' => 'required'),
            array('field' => 'salada', 'label' => 'Salada', 'rules' => 'required'),
            array('field' => 'sobremesa', 'label' => 'Sobremesa', 'rules' => 'required'),
            array('field' => 'suco', 'label' => 'Suco', 'rules' => 'required')
        );

        $this->form_validation->set_rules($regras);
        return $this->form_validation->run();
    }

    public function store() {
        if (!$this->validarFormulario()) {
            $data['titulo'] = 'Erro no Formulario';
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', ' </div> ');
            $this->template->show('cardapio/adicionarCardapio_view', $data);
        } else {
            //$id = $this->input->get('id');
            $id = $this->input->get('id');
            echo $id;
            $dados = [
                'idCardapio' => $this->input->post('id'),
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

    public function novo() {
        $variaveis['titulo'] = "Novo";
        $this->template->show('cardapio/adicionarCardapio_view', $variaveis);
    }

    function delete($id) {
        if ($this->cardapio_model->deletar($id)) {
            $variaveis['caminhoVoltar'] = "/index.php/cardapio_controller/listar";
            $variaveis['mensagem'] = "Deletado com sucesso";
            $variaveis['titulo'] = "Sucesso";
            $this->template->show('errors/v_sucesso', $variaveis);
        } else {
            $variaveis['titulo'] = "Erro";
            $this->template->show('errors/v_error', $variaveis);
        }
    }

}
