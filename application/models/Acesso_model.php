<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Acesso_model extends CI_Model {
    
    public function getColaboradores() {
        return $this->db->get('AcessoRestrito');
        
    }
    
    // Metodo para listar os usuários por nome utilizado pela classe controler pesquisaUsuario
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
}