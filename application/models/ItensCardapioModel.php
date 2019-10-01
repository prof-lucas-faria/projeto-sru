<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ItensCardapioModel extends CI_Model {

    private $nomeItem;

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        
    }

}
