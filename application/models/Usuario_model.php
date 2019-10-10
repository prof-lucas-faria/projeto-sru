<?php

class Usuario_model extends CI_Model
{

    // Metodo para listar todos os usuários da tabela Usuario do banco SRU. Essa função é utilizada Homecontrole.
    public function listarTodos(){
        return $this->db->get('Usuario');
    }
// contador de registro. Ira trazer a contagem da tabela usuario e retorna um inteiro
    public function get_count() {
        return $this->db->count_all("Usuario");
    }

    // Metodo para listar os usuários por matricula utilizado pela classe controler HomeController
    public function getMatricula($matricula){

        if ($matricula == "") {
            $query = $this->db->get('Usuario');
            return $query->result();
        } else {

            $query = $this->db->query("select * from Usuario where matricula = '$matricula'");
            return $query->result();
        }
    }

    // define o limte de registros exibido na tabela de paginação
    public function get_limite($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("Usuario");

        return $query->result();
    }
}
