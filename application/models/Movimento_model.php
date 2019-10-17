<?php

class Movimento_model extends CI_Model{   

    public function setEntrada(){

        $query = $this->db->get('Usuario');
        return $query->result();
        
    }

}

?>