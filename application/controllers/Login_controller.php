<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function autenticar() {

        $this->load->model('login_model');

        $data['titulo'] = "Login";

        $this->template->show('login/loginAcesso', $data);

        $email = $this->input->post("eMail");
        $senha = md5($this->input->post("senha"));

        $data = $this->login_model->logarColaborador($email, $senha);

        if ($data === true) {

            $this->session->set_userdata("colaborador", $email);
            $this->session->set_flashdata("success", true);

            redirect(site_url('index.php/acesso_controller/resultadoAcesso'));
        } else {

            $this->session->set_flashdata("danger", "Usuário ou senha inválidos!");
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect(site_url('index.php/acesso_controller/resultadoAcesso'));
    }

}
