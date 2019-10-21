<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    /**
     * 
     * No index() é realizado a verificacao
     * se o usuário está logado.
     *   
     */
    public function index() {
        $this->load->model('login_model');
        $data['titulo'] = "Login"; //titulo da página
        $this->template->show('login/master', $data);
    }

    public function validarFormulario() {
        $regras = array(
            array(
                'field' => 'eMail',
                'label' => 'Email',
                'rules' => 'required|valid_email',
            ),
            array('field' => 'senha',
                'label' => 'Senha',
                'rules' => 'required')
        );
        $this->form_validation->set_rules($regras);
        return $this->form_validation->run();
    }

    public function verificalogin($email = '', $senha = '') {
        $this->load->model('login_model');
        return $this->login_model->verifica($email, $senha);
    }

    public function acao() {
        if (!$this->validarFormulario()) {//se as regras de validação não passar
            $data['titulo'] = 'Erro no Formulario';
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', ' </div> ');
            $this->template->show('login/master', $data);
        } else {
            $eMail = $this->input->post('eMail');
            $senha = $this->input->post('senha');
            // $senha = md5($this->input->post('senha')); assim estava com erro, 
            if ($this->verificalogin($eMail, $senha)) {
                $dados = array(
                    'usuario' => $eMail,
                    'logado' => true
                );
                $this->session->set_userdata($dados);
                $this->load->model('acesso_model');
                $data['listagemDeAcesso'] = $this->acesso_model->getColaboradores();
                $data['titulo'] = $this->session->userdata('eMail'); //titulo da página
                $this->template->show('acesso/resultadoAcesso', $data, $dados);
            } else {//senha incorreta
                $data['mensagem'] = "Senha ou Email incorretos";
                $data['titulo'] = "Erro Acesso"; //titulo da página
                $this->template->show('errors/v_error', $data);
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(site_url('login_controller'));
    }

}
