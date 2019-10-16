<?php

class Movimento_model extends CI_Model{

    public function setEntrada($matricula){

        if ($matricula == "") {
            return false;
        } else {

            return true;
        }
    }

}

?>