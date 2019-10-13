<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_model extends CI_Model {
    
    public function salva($data) {
        $this->db->insert('AcessoRestrito', $data);
    }
    
    public function logarColaborador($email, $senha) {
        $this->db->where("eMail", $email);
        $this->db->where("senha", $senha);
        $data = $this->db->get('AcessoRestrito')->row_array();
        return $data;
    }

}