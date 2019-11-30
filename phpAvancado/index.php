<?php
//Cookies são usados para identificar usuários, é um arquivo enviado ao cliente e sempre que ele acessar o servidor o computador também enviará o cookie
/*
$nomeDoCookie = "usuario";
$valorDoCookie = "Gabriel Veras";
setcookie($nomeDoCookie, $valorDoCookie, time() + (86400 * 30), "/");//Função para criar o cookie, 86400 = 1 dia//Deve estar antes da tag html
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página para testes de php avançado</title>
    <style>
        .arquivo{
            margin: auto;
            background-color: #cccccc;
            width: 900px;
            height: 300px;
            padding: 25px;
            text-align: center;
        }
    </style>
</head>
<body>
<!--div class="arquivo">
    <h1>Arquivos</h1>
    <?php
    /*
    echo readfile("arquivo.txt")."<br>";                                                                       //Retorna todo o conteúdo do arquivo em uma string
    $myFile = fopen("arquivo.txt", "r") or die("Não foi possível abrir o arquivo");                      //Retorna o endereço de memória do arquivo com o nome passado no primeiro parâmetro, o segundo especifica a forma que o arquivo será aberto
    echo fgets($myFile);                                                                                                //Retorna a linha atual do arquivo, após isso o arquivo passa para a próxima linha
    echo fread($myFile, filesize("arquivo.txt"))."<br>";                                                       //Retorna todo o conteúdo do arquivo até o tamanho de bytes dado pelo segundo parâmetro
    echo feof($myFile);                                                                                                 //Verifica se o 'fim de arquivo' foi atingido
    fgetc($myFile);                                                                                                     //Retorna um caractere do arquivo, após a chamada o ponteiro muda para o próximo caractere
    fclose($myFile);                                                                                                    //Fecha o arquivo do endereço passado por parâmetro, também fecha um arquivo com o mesmo nome de uma string parrada como parâmetro

    //Uma boa forma de usar algumas das funções mostradas acima
    $myFile = fopen("arquivo.txt", "r");                                                                 //Abrimos o arquivo só para leitura
    while (!feof($myFile)){                                                                                             //Execultamos o bloco enquanto não estivermos no fim do arquivo
        echo fgets($myFile)."<br>";                                                                                     //Imprimimos a linha seguido por uma quebra de linha
    }
    fclose($myFile);                                                                                                    //Fechamos o arquivo, já que terminamos de trabalhar com ele
    //Fim da forma de usar as funções
    */
    ?>
</div>
<hr style="width: 950px"-->
<!--div class="arquivo">
    <h1>Criar/Gravar arquivo</h1>
    <?php
    /*
    $meuArquivo = fopen("testfile.txt", "a");                                                            //Cria um arquivo chamado testfile, se ele já existir ele apenas abre o arquivo, o segundo é o modo de abrir o arquivo, em w ele reescreve o arquivo, se quiser apenas acrescentar texto use o a
    $texto = "Eu sou muito machão\n";
    fwrite($meuArquivo, $texto);                                                                                        //Escreve no arquivo do primeiro parâmetro a estring do segundo parâmetro
    $texto = "Além de machão gostosão\n";
    fwrite($meuArquivo, $texto);
    fclose($meuArquivo);                                                                                                //Fecha o arquivo passado como parâmetro
    */
    ?>
</div-->
<!--div class="arquivo">
    <h1>Upload de arquivo</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione a imagem para upload
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</div-->
<!--div class="arquivo">
    <h1>Cookie</h1>
    <?php
    /*
    if(!isset($_COOKIE[$nomeDoCookie])){
        echo "Cookie $nomeDoCookie não está setado";
    }else{
        echo "Cookie $nomeDoCookie está setado <br>";
        echo "O valor é: ".$_COOKIE[$nomeDoCookie];
    }
    */
    ?>
</div>
<hr width="950">
<div class="arquivo">
    <h1>Sintaxe da função setcookie</h1>
    <code>
        setcookie(nome, valor, validade, pasta, domínio, segurança, httponly);
    </code>
    <p>Use setrawcookie para evitar codificação de URL.</p>
    <p>Para modificar um cookie basta definir novamente o cookie usando a função setcookie</p>
    <p>Para excluir um cookie basta usar a função setcookie com data de validade expirada</p>
    <p>Para testar se os cookies estão ativados basta fazer um cookie e usar a função count passando como argumento $_COOKIE, se for maior que 0 os cookies estão ativados</p>
</div-->
<!--div class="arquivo">
    <h1>Seção PHP</h1>
    <?php
    //session_start();
    ?>
</div-->

</body>
</html>