<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
    <form method="get" action="aula13-tabuada.php">
        <label>
            <select name="num">
                <?php
                for($c = 1; $c <= 10; $c++){
                    echo "<option>$c</option>";
                }

                ?>
            </select>
            <input value="Tabuada" type="submit">
        </label>
    </form>
    <!--php
        for($i = 1; $i <= 10; $i++){
            echo "$i ";
        }
        echo "<br>";
        for($i = 10; $i >= 1; $i--){
            echo "$i ";
        }
    ?-->
</body>
</html>
