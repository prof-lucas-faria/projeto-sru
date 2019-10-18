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

        // $data['colaboradores'] = $this->login_model->ehLogado();

        $data['titulo'] = "Login"; //titulo da página
        $this->template->show('login/master', $data);
    }

    public function acao() {

        $eMail = $this->input->post('eMail');
        $senha = $this->input->post('senha');

        if ($eMail && $senha) {

            $this->load->model('login_model'); // carregamos o model

            $verifica = $this->login_model->verifica($eMail, $senha);

            if ($verifica === true) {

                $this->session->set_userdata('usuario', $eMail);
                $this->session->set_userdata('logado', true);

                // redirect(site_url('acesso/resultadoAcesso'));

                $this->load->model('acesso_model');
                $data['listagemDeAcesso'] = $this->acesso_model->resultadoAcesso();
                $data['titulo'] = "Loginppppp"; //titulo da página
                $this->template->show('acesso/resultadoAcesso', $data);
            }else{
                //se a senha for falsa
            }
        } else {

            redirect(site_url('login_controller?retorno=campos-vazios'));
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect(site_url('login_controller'));
    }

}
