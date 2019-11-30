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

    $conexao = mysqli_connect($servidor, $nomeDeUsuario, $senha, $banco);

    if(!$conexao){
        die("Erro de conexão: ".mysqli_connect_error());
    }else{
        echo "Conectado com sucesso";
    }
    //Fazer a conexão

    //Fechar a conexão
    //mysqli_close($conexao);
    //Fechar a conexão

    //Criar banco de dados
    /*
    $sql = "create database myDB";

    if(mysqli_query($conexao, $sql)){
        echo "Banco de dados criado com sucesso";
    }else{
        echo "Erro ao criar o banco: ".mysqli_error($conexao);
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

    if(mysqli_query($conexao, $sql)){
        echo "Tabela MyGuests criada com sucesso";
    }else{
        echo "Erro ao criar a tabela: ".mysqli_error($conexao);
    }
    */
    //Criar tabelas

    //Inserir dados
    /*
    $sql = "insert into MyGuests (primeiro_nome, sobrenome, email) values ('John', 'Doe', 'john@example.com')";

    if(mysqli_query($conexao, $sql)){
        echo "Novo registro criado com sucesso";
    }else{
        echo "Erro ao criar registro: ".mysqli_error($conexao);
    }
    */
    //Inserir dados

    //Pegar o id do último registro inserido
    //echo "último ID: ".mysqli_insert_id($conexao);
    //Pegar o id do último registro inserido

    //Inserir vários registros
    /*
    $sql = "insert into MyGuests (primeiro_nome, sobrenome, email) values ('John', 'Doe', 'john@example.com');";
    $sql .= "insert into MyGuests (primeiro_nome, sobrenome, email) values ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "insert into MyGuests (primeiro_nome, sobrenome, email) values ('Julie', 'Dooley', 'Julie@example.com')";

    if(mysqli_multi_query($conexao, $sql)){
        echo "Novos registros criados com sucesso";
    }else{
        echo "Erro ao criar registros: ".mysqli_error($conexao);
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
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while ($linha = mysqli_fetch_assoc($resultado)){
            echo "Id: ".$linha["id"]." - Nome: ".$linha["primeiro_nome"]." ".$linha["sobrenome"]."<br>";
        }
    }else{
        echo "0 resultados";
    }
    */
    //Selecione dados

    //Remover dados
    /*
    $sql = "delete from MyGuests where id=1";

    if(mysqli_query($conexao, $sql)){
        echo "Registro deletado com sucesso";
    }else{
        echo "Erro ao deletar registro: ".mysqli_error($conexao);
    }
    */
    //Remover dados

    //Atualizar dados
    /*
    $sql = "update MyGuests set sobrenome='Doe' where id=9";

    if(mysqli_query($conexao, $sql)){
        echo "Registro atualizado com sucesso";
    }else{
        echo "Erro ao atualizar registro: ".mysqli_error($conexao);
    }
    */
    //Atualizar dados
?>
</body>
</html>