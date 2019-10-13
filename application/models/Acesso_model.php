<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Acesso_model extends CI_Model {
    
    public function getColaboradores() {
        return $this->db->get('AcessoRestrito');
        
    }
    
    public function get_count() {
        return $this->db->count_all('AcessoRestrito');
        
    }
    
    public function listarColaborador($listar){

        if(empty($listar))
            return array();
        
        $listar = $this->input->post('busca');

        $this->db->like('nomeColaborador', $listar);

        $query = $this->db->get('AcessoRestrito');

        return $query->result_array();

    }
    
    public function getNome($nomeColaborador = null){

    if ($nomeColaborador == null){
        return $this->db->get('AcessoRestrito');
        }

    }
    
    public function get_limite($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('AcessoRestrito');

        return $query->result();
    }
}