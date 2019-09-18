<?php

class Usuario{

    private $idUsuario;
    private $matricula = null;
    private $nome = null;
    private $genero = null;
    private $cidadeOrigem = null;
    private $curso = null;
    private $perfil = null;


    function __construct($idUsuario, $matricula, $nome, $genero, $cidadeOrigem, $curso, $perfil){

        $this->__set('idUsuario', $idUsuario);
        $this->__set('matricula', $matricula);
        $this->__set('nome', $nome);
        $this->__set('genero', $genero);
        $this->__set('cidadeOrigem', $cidadeOrigem);
        $this->__set('curso', $curso);
        $this->__set('perfil', $perfil);
    } 
    
    // Get e Set OverLoading
    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    
}

// $usuario1 = new Usuario("1", "2017103", "Welliton", "Masculino", "Ceres", "Sistema", "Aluno");

// echo "<pre>";

// print_r($usuario1);

// echo "</pre>";
?>