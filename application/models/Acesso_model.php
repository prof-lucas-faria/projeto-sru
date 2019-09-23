<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
class Acesso_model extends CI_Model {
    
    public function getColaboradores() {
        return $this->db->get('AcessoRestrito')->result_array();
        
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
}

//$colaborador1 = new Acesso_model("1", "Ana", "123.234.567-89", "ana@gmail.com", "123456", "Nutricionista");

//echo "<pre>";

//print_r($colaborador1);

//echo "</pre>";

?>