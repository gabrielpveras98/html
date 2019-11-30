<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 05</title>
        <style>
            h1{
                color: red;
                font-size: 25px;

            }
        </style>
    </head>
    <body>
        <?php
            $n1 = 3;
            $n2 = 2;
            $s = $n1 + $n2;
            echo "A soma entre $n1 e $n2 é $s"
        ?>
        <h1>Operadores</h1><br>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            $media = ($n1 + $n2) / 2;
            echo "A soma vale ".($n1 + $n2);
            echo "<br>A subtração vale ".($n1 - $n2);
            echo "<br>A multiplicação vale ".($n1 * $n2);
            echo "<br>A divisão vale ".($n1 / $n2);
            echo "<br>O módulo vale ".($n1 % $n2);
            echo "<br>A média vale $media";
        ?>
        <h1>Funções aritméticas</h1>
        <?php
            $v1 = $_GET["a"];
            $v2 = $_GET["b"];
            echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "<br>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
        ?>

    </body>
</html>

