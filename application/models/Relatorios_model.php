<?php

class Relatorios_model extends CI_Model{

    
    public function consultaPorGenero($dataHoraI, $dataHoraF){   
        
        
        $query = $this->db->query("select genero, count(genero) as qtde 
        FROM Movimento 
        inner join Usuario on Movimento.idUsuarios = Usuario.idUsuario 
        where dataHora between $dataHoraI and $dataHoraF and idTipoMovimento = '1' 
        group by genero");                      
        
        return $query->result();
    }    

}
