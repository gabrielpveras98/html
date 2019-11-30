<?php
class conexao {
    private $servidor = "162.241.2.188";
    private $usuario = "si3pif51_pereira";
    private $senha = "gabriel1234";
    private $banco = "si3pif51_pereira";

    public function conectar(){
        return new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco);
    }
}