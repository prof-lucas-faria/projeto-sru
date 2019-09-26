<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio_model extends CI_Model{

    public function listarCardapioTodos(){

        $query = $this->db->get('Cardapio');
        return $query->result();
    }

}

?>