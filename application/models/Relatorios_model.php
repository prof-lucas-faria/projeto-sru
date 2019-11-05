<?php

class Relatorios_model extends CI_Model{

    // contador de registro. Ira trazer a contagem da tabela usuario e retorna um inteiro
    //public function get_count() {
      //  return $this->db->count_all("Cardapio");
    //} 

    public function setEntrada($id){        

        $query = $this->db->query("select * from Usuario, Cardapio where Usuario.idUsuario = $id and Cardapio.data = date(now())");
        
        if ($query->row() != null){

            $dados['data'] = date('y-m-d H:i:s');
            $dados['idUsuarios'] = $query->row()->idUsuario;
            $dados['idCardapio'] = $query->row()->idCardapio;
            $dados['idTipoMovimento'] = '1';
            $this->db->insert('Movimento', $dados);
            return true;

        } else {
            return false;
        }
        
    }


    public function setSaida($id){        

        $query = $this->db->query("select * from Usuario, Cardapio where Usuario.idUsuario = $id and Cardapio.data = date(now())");
        
        if ($query->row() != null){

            $dados['data'] = date('y-m-d H:i:s');
            $dados['idUsuarios'] = $query->row()->idUsuario;
            $dados['idCardapio'] = $query->row()->idCardapio;
            $dados['idTipoMovimento'] = '2';
            $this->db->insert('Movimento', $dados);
            return true;

        } else {
            return false;
        }
        
    }

}
