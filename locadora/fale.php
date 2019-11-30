<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criarte locações</title>
    <?php include 'head.php';?>
    <script>
        function valida(){
            if(form.nome.value.length < 3){
                alert("Campos inválidos");
                form.nome.focus();
                return false
            }else if(form.email.value === ""){
                alert("Campos inválidos");
                form.email.focus();
                return false
            }else if(form.telefone.value === ""){
                alert("Campos inválidos");
                form.telefone.focus();//Parei aqui...
                return false
            }else if(form.mensagem.value === ""){
                alert("Mensagem obrigatória");
                form.mensagem.focus();
                return false;
            }else{
                return true;
            }
        }

        function setErro(erro) {
            document.getElementById('msg').innerHTML=erro;
        }
    </script>
</head>
<body style="background-color: #eeeeee">
<?php include 'header.php' ?>
<div class="row">
    <?php include 'nav.php'?>
    <?php include 'controler/controle.php'?>
    <?php
    echo '
        <div class="coluna-a-6 coluna-b-12">
            <h1>Contato</h1>
            <form name="form" method="post" action="fale.php?id=1" onsubmit="return valida()">
                <fieldset>
                    <legend>Preencha o formulário de contato</legend>
                    <label id="msg" name="msg" style="color: red"></label><br>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome"><br>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"><br>
                    <label for="telefone">Telefone</label>
                    <input id="telefone" type="text" name="telefone" pattern="\(\d{2}\)\d{5}-\d{4}" required maxlength="14" title="Formato: (99)99999-9999" ><br>
                    <label>Sexo: </label><br>
                    <label for="mas">Masculino</label>
                    <input id="mas" name="sexo" type="radio" checked value="m"><br>
                    <label for="fem">Feminino</label>
                    <input id="fem" name="sexo" type="radio" value="f"><br>
                    <label for="mensagem">Mensagem: </label><br>
                    <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui..."></textarea><br>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </div>';
    if(isset($_GET['id']) == 1){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $sexo = $_POST['sexo'];
        $mensagem = $_POST['mensagem'];
        $erro = validar($nome, $email, $telefone, $sexo, $mensagem);
        if($erro != 'OK'){
            echo '<script>setErro("'.$erro.'")</script>';
        }else{
            //Subir as mensagens para o banco de mensagens, depois mudar isso pra receber por e-mail...
            $servidor = "localhost";
            $usuario = "root";
            $senha = "Valdinete1234";
            $banco = "locadora";

            $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

            if(!$conexao){
                echo '<script>alert("ERRO DE CONEXÃO")</script>';
            }else{
                if(mysqli_query($conexao,'insert into mensagem (nome, email, telefone, sexo, mensagem) values ("'.$nome.'", "'.$email.'", "'.$telefone.'", "'.$sexo.'","'.$mensagem.'");')){
                    echo "<script>alert('Mensagem enviada com sucesso!')</script>";
                }else{
                    echo "Ocorreu um erro, tente novamente mais tarde...";
                }
            }
        }
    }
    ?>
    <?php include 'aside.php'?>
</div>
<?php include 'footer.php' ?>
</body>
</html>