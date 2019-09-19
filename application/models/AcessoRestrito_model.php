<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
class AcessoRestrito extends CI_Model {
    
    private $idAcessoRestrito;
    private $nomeColaborador;
    private $cpf;
    private $eMail;
    private $senha;
    private $perfil;
    
    function __construct($idAcessoRestrito, $nomeColaborador, $cpf, $eMail, $senha, $perfil) {
       
        $this->set('idAcessoRestrito', $idAcessoRestrito);
        $this->__set('nomeColaborador', $nomeColaborador);
        $this->__set('cpf', $cpf);
        $this->__set('eMail', $eMail);
        $this->__set('senha', $senha);
        $this->__set('perfil', $perfil);
    }
    
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    
    public function getColaboradores() {
        $query = $this->db->get('AcessoRestrito');
        return $query->result();
    }
}

?>