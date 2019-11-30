<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    //Fazer a conexão
    $servidor = "localhost";
    $nomeDeUsuario = "root";
    $senha = "Valdinete1234";
    $banco = "myDB";

    $conexao = new mysqli($servidor, $nomeDeUsuario, $senha, $banco);

    if($conexao->connect_error){
        die("Erro de conexão: ".$conexao->connect_error);
    }else{
        echo "Conectado com sucesso";
    }
    //Fazer a conexão

    //Fechar a conexão
    //$conexao->close();
    //Fechar a conexão

    //Criar banco de dados
    /*
    $sql = "create database myDB";

    if($conexao->query($sql) === true){
        echo "Banco de dados criado com sucesso";
    }else{
        echo "Erro ao criar o banco: ".$conexao->error;
    }
    */
    //Criar banco de dados

    //Criar tabelas
    /*
    $sql = "create table MyGuests(
    id int(6) unsigned auto_increment primary key,
    primeiro_nome varchar(30) not null,
    sobrenome varchar(30) not null,
    email varchar(50),
    data_registro timestamp default current_timestamp on update current_timestamp
    );";

    if($conexao->query($sql) === true){
        echo "Tabela MyGuests criada com sucesso";
    }else{
        echo "Erro ao criar a tabela: ".$conexao->error;
    }
    */
    //Criar tabelas

    //Inserir dados
    /*
    $sql = "insert into MyGuests (primeiro_nome, sobrenome, email) values ('John', 'Doe', 'john@example.com')";

    if($conexao->query($sql) === true){
        echo "Novo registro criado com sucesso";
    }else{
        echo "Erro ao criar registro: ".$conexao->error;
    }
    */
    //Inserir dados

    //Pegar o id do último registro inserido
    //echo "último ID: ".$conexao->insert_id;
    //Pegar o id do último registro inserido

    //Inserir vários registros
    /*
    $sql = "insert into MyGuests (primeiro_nome, sobrenome, email) values ('John', 'Doe', 'john@example.com');";
    $sql .= "insert into MyGuests (primeiro_nome, sobrenome, email) values ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "insert into MyGuests (primeiro_nome, sobrenome, email) values ('Julie', 'Dooley', 'Julie@example.com')";

    if($conexao->multi_query($sql)){
        echo "Registros criados com sucesso";
    }else{
        echo "Erro ao criar registros: ".$conexao->error;
    }
    */
    //Inserir vários registros

    //Instruções preparadas
    /*
    $stmt = $conexao->prepare("insert into MyGuests (primeiro_nome, sobrenome, email) values (?, ?, ?)");

    $stmt->bind_param("sss", $primeiroNome, $sobrenome, $email);

    $primeiroNome = "John";
    $sobrenome = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    $primeiroNome = "Mary";
    $sobrenome = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    $primeiroNome = "Julie";
    $sobrenome = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();

    echo "Novos registros criados com sucesso";

    $stmt->close();
    */
    //Instruções preparadas

    //Selecione dados
    /*
    $sql = "select id, primeiro_nome, sobrenome from MyGuests order by id";
    $resultado = $conexao->query($sql);

    if($resultado->num_rows > 0){
        while ($linha = $resultado->fetch_assoc()){
            echo "Id: ".$linha["id"]." - Nome: ".$linha["primeiro_nome"]." ".$linha["sobrenome"]."<br>";
        }
    }else{
        echo "0 resultados";
    }
    */
    //Selecione dados

    //Remover dados
    /*
    $sql = "delete from MyGuests where id=3";

    if($conexao->query($sql) === true){
        echo "Registro deletado com sucesso";
    }else{
        echo "Erro ao deletar registro: ".$conexao->error;
    }
    */
    //Remover dados

    //Atualizar dados
    /*
    $sql = "update MyGuests set sobrenome='Doe' where id=8";

    if($conexao->query($sql) === true){
        echo "Registro atualizado com sucesso";
    }else{
        echo "Erro ao atualizar registro: ".$conexao->error;
    }
    */
    //Atualizar dados
?>
</body>
</html>