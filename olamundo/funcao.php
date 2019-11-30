<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
    <?php
        function somar(){
            $numero = func_num_args();
            $valores = func_get_args();
            $soma = 0;
            for($c = 0; $c < $numero; $c++){
                $soma += $valores[$c];
            }
            return $soma;
        }
        echo "soma: ".(somar(5, 8, 55, 2));
    ?>
</body>
</html>
