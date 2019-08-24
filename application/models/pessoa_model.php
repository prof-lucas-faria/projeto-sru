<?php
defined('BASEPATH') OR exit('No direct script access allowed');

public function add($dados){

$data = array(
        'col-email' => $dados['email'],
        'col-senha
' =>  $dados['senha'],
);

return $this->db->insert('login', $data);

}

?>
