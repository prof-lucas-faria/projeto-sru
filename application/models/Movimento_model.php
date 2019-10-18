<?php

class Movimento_model extends CI_Model{   

    public function setEntrada($id){

        $this->db->where('idUsuario', $id);
        $this->db->limit(1);
        $query = $this->db->get('usuario');
        return $query->row();
        
        
    }

}

?>