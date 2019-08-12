<?php
class Alunos{
    private $nome;
    private $matricula;
    private $curso;

    function setNome($parametroNome){
        $this->nome = $parametroNome;
    }

    function getNome(){
        return $this->nome;
    }

    function setMatricula($parametroMatricula){
        $this->matricula = $parametroMatricula;
    }

    function getMatricula(){
        return $this->matricula;
    }

    function setCurso($parametroCurso){
        $this->curso = $parametroCurso;
    }

    function getCurso(){
        return $this->curso;
    }
}
?>
