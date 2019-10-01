<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio_model extends CI_Model {

    private $id;
    private $data;
    private $nome;
    private $pratoPrincipal;
    private $guarnicao;
    private $acompanhamento;
    private $salada;
    private $sobremesa;
    private $suco;

//    public function __construct($id, $data, $nome, $pratoPrincipal, $guarnicao, $acompanhamento, $salada, $sobremesa, $suco) {
//        parent::__construct();
//        $this->set('id', $id);
//        $this->__set('data', $data);
//        $this->__set('nome', $nome);
//        $this->__set('acompanhamento', $acompanhamento);
//        $this->__set('pratoPrincipal', $pratoPrincipal);
//        $this->__set('guarnicao', $guarnicao);
//        $this->__set('salada', $salada);
//        $this->__set('sobremesa', $sobremesa);
//        $this->__set('suco', $suco);
//    }


    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    //$dados. Array que contém os campos a serem inseridos
    //Se for passado o $id via parâmetro, então atualizo o registro em vez de inseri-lo.
    public function store($dados = null, $id = null) {
        if ($dados) {
            if ($id) {
                $this->db->where('id', $id);
                if ($this->db->update("Cardapio", $dados)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($this->db->insert("Cardapio", $dados)) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }
    public function get(){
        return $this->db->get('Cardapio');
    }

}
