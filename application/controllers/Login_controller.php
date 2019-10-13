<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {  
    
        public function index() {
            
        $this->load->model('login_model', 'colaboradores');

        $data['colaboradores'] = $this->login_model->salva();
        
        $data['titulo'] = "Login"; //titulo da página
        $this->template->show('login/loginAcesso', $data);
        
        }

        public function autenticar() {        
            $this->load->model('login_model');      
            
            $data['titulo'] = "Login";       
            $this->template->show('login/loginAcesso', $data);

            
            $email = $this->input->post("eMail");
            $senha = md5($this->input->post("senha"));                      
            $data = $this->login_model->logarColaborador($email, $senha);
            
            if($data) {
                $this->session->set_userdata("colaborador logado", $data);
                $this->session->set_flashdata("success", "Logado com sucesso!");
            } else {
                $this->session->set_flashdata("danger", "Usuário ou senha inválidos!");
            }

    }
    
}