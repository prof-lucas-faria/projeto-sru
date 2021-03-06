<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio_model extends CI_Model
{

    private $id;
    private $data;
    private $nomeCardapio;
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


    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    // contador de registro. Ira trazer a contagem da tabela usuario e retorna um inteiro
    public function get_count()
    {
        return $this->db->count_all("Cardapio");
    }

    // define o limte de registros exibido na tabela de paginação
    public function get_limite($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("Cardapio");

        return $query->result();
    }

    //$dados. Array que contém os campos a serem inseridos
    //Se for passado o $id via parâmetro, então atualizo o registro em vez de inseri-lo.
    public function store($dados = null, $id = null)
    {
        if ($dados) {

            if ($id) {
                $this->db->where('idCardapio', $id);
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

    function deletar($id)
    {
        $this->db->where('idCardapio', $id);
        return $this->db->delete('Cardapio');
    }

    function getTiposCardapio()
    {
        $query = $this->db->query("SELECT idTipoCardapio, nomeTipoCardapio FROM TipoCardapio");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $arrDados[htmlspecialchars($row->idTipoCardapio, ENT_QUOTES)] = htmlspecialchars($row->nomeTipoCardapio, ENT_QUOTES);
            }
            $query->free_result();
            return $arrDados;
        }
    }

    public function get()
    {
        return $this->db->get('Cardapio');
    }

    public function listarPorId($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('Cardapio');
        $this->db->where('idCardapio', $id);
        $query = $this->db->get();
        return $query->row();
    }

}
