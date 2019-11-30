<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 05</title>
</head>
<body>
    <pre>
        <?php
            $c = array(0=>5, 1=>9, 2=>8, 3=>7, 8=>15);
            foreach ($c as $v){
                echo "$v ";
            }
            unset($v[2]);
        ?>
    </pre>
</body>
</html>