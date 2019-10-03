<?php

class Usuario_model extends CI_Model {

    // Metodo para listar todos os usuários da tabela Usuario do banco SRU. Essa função é utilizada Homecontrole.
    public function listarTodos() {
        return $this->db->get('Usuario');
    }

    // Metodo para listar os usuários por matricula utilizado pela classe controler HomeController
    public function listarMatricula() {

        if (empty($lista)) {
            return array();
        }

        $lista = $this->input->post('busca');

        $this->db->like('matricula', $lista);

        $query = $this->db->get('Usuario');
//
        return $query->result_array();
//    }

}

public function getMatricula($matricula = null){

    if ($matricula == null){
        return $this->db->get('Usuario');
    }

}

}