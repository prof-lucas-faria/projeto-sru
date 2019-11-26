<?php

class Relatorios_model extends CI_Model{

    
    public function consultaPorGenero($dataHoraI, $dataHoraF){  

        $dataHoraI = new DateTime($dataHoraI);
        $dataHoraF = new DateTime($dataHoraF);     
        
    //   echo var_dump($dataHoraI);

        $query = $this->db->query("select genero, count(genero) as qtde 
        FROM Movimento 
        inner join Usuario on Movimento.idUsuarios = Usuario.idUsuario 
        where dataHora between '{$dataHoraI->format('Y-m-d H:i:s')}' and '{$dataHoraF->format('Y-m-d H:i:s')}' and idTipoMovimento = '1' 
        group by genero");                      
        
        return $query->result();
    }    
    

    public function consultaGeral($dataHoraI, $dataHoraF){

        $dataHoraI = new DateTime($dataHoraI);
        $dataHoraF = new DateTime($dataHoraF); 

        $query = $this->db->query("select count(idMovimento) as qtde FROM Movimento
        where dataHora between '{$dataHoraI->format('Y-m-d H:i:s')}' and '{$dataHoraF->format('Y-m-d H:i:s')}' and idTipoMovimento = '1'");

        return $query->result();

    }

    public function consultaPorCurso($dataHoraI, $dataHoraF){

        $dataHoraI = new DateTime($dataHoraI);
        $dataHoraF = new DateTime($dataHoraF);

        $query = $this->db->query("select curso, count(idMovimento) as qtde 
        from Movimento inner join Usuario on Movimento.idUsuarios = Usuario.idUsuario
        where dataHora between '{$dataHoraI->format('Y-m-d H:i:s')}' and '{$dataHoraF->format('Y-m-d H:i:s')}' and idTipoMovimento = '1'
        group by curso order by qtde");

        return $query->result();
    }

    public function consultaPorCidade($dataHoraI, $dataHoraF){

        $dataHoraI = new DateTime($dataHoraI);
        $dataHoraF = new DateTime($dataHoraF);

        $query = $this->db->query("select cidadeOrigem, count(idMovimento) as qtde 
        from Movimento inner join Usuario on Movimento.idUsuarios = Usuario.idUsuario
        where dataHora between '{$dataHoraI->format('Y-m-d H:i:s')}' and '{$dataHoraF->format('Y-m-d H:i:s')}' and idTipoMovimento = '1'
        group by cidadeOrigem order by qtde");

        return $query->result();
    }



}