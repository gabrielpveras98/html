<?php
require_once "conexao.php";

class usuario {
    private $nome;
    private $email;
    private $senha;

    public function inserir(){
        $con = new conexao();
        $conexao = $con->conectar();

        $sql = "insert into user (nome, email, senha) values ('".$this->nome."', '".$this->email."', '".md5($this->senha)."')";
        $query = $conexao->query($sql);
        if ($query){
            return 1;
        }else{
            return 0;
        }

    }

    public function logar(){
        $con = new conexao();
        $conexao = $con->conectar();

        $sql = "select * from user where senha = '".md5($this->senha)."' and email = '".$this->email."';";
        $saida = $conexao->query($sql);

        if($saida->num_rows >= 1){
            return 1;
        }else{
            return 0;
        }
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function listar() {
        $con = new conexao();
        $conexao = $con->conectar();

        $lista = array();
        $sql = "select * from user";

        $query = mysqli_query($conexao, $sql);
        while ($usuario = mysqli_fetch_array($query)){
            array_push($lista, $usuario);
        }
        return $lista;
    }

    public function alterar($id){
        $con = new conexao();
        $conexao = $con->conectar();

        $sql = "update user set nome='".$this->nome."', email='".$this->email."'";
        if($this->senha == ""){
            $sql .= ";";
        }else{
            $sql .= ", senha='".md5($this->senha)."';";
        }
        $query = mysqli_query($conexao, $sql);
        if($query){
            return 1;
        }else{
            return 0;
        }
    }

    public function deletar($id){
        $con = new conexao();
        $conexao = $con->conectar();

        $sql = "delete from user where id=$id";
        mysqli_query($conexao, $sql);
    }

    public function pegarDados($id){
        $con = new conexao();
        $conexao = $con->conectar();

        $sql = "select * from user where id=$id";

        $query = mysqli_query($conexao, $sql);
        return mysqli_fetch_array($query);
    }
}