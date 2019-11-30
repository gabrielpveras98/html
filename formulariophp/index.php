<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$name = $email = $website = $comment = $gender = "";

$nameErr = $emailErr = $websiteErr = $genderErr = "";

function test_input($dado){
    $dado = trim($dado);
    $dado = stripcslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['name'])) {
        $nameErr = "Nome é requerido";
    }else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z]*$/", $name)) {
            $nameErr = "Apenas letras e espaços em branco";
        }
    }
    if(empty($_POST['email'])){
        $emailErr = "E-mail é requerido";
    }else {
        $email = test_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de E-mail inválido";
        }
    }
    if (empty($_POST['website'])){
        $website = "";
    }else {
        $website = test_input($_POST['website']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
            $websiteErr = "URL inválido";
        }
    }
    if (empty($_POST['comment'])){
        $comment = "";
    }else {
        $comment = test_input($_POST["comment"]);
    }
    if (empty($_POST['gender'])){
        $genderErr = "Genêro é requerido";
    }else {
        $gender = test_input($_POST['gender']);
    }
}else{
    echo "tratata";
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Nome: </label><br>
        <input type="text" id="name" name="name" value="<?php echo $name?>">
        <span class="error">* <?php echo $nameErr?></span><br>
        <label for="email">E-mail: </label><br>
        <input type="text" id="email" name="email" value="<?php echo $email?>">
        <span class="error">* <?php echo $emailErr?></span><br>
        <label for="website">Website: </label><br>
        <input id="website" type="text" name="website" value="<?php echo $website?>">
        <span class="error"><?php echo $websiteErr?></span><br>
        <label for="comment">Comentário</label><br>
        <textarea id="comment" rows="5" cols="40" placeholder="Digite seu comentário aqui" name="comment"><?php echo $comment?></textarea><br>
        <label>Genero: </label><br>
        <label for="female">Feminino </label>
        <input type="radio" id="female" name="gender" value="female" <?php if(isset($gender) && $gender == "female"){ echo "checked";}?>><br>
        <label for="male">Masculino </label>
        <input type="radio" id="male" name="gender" value="male" <?php if(isset($gender) && $gender == "male"){ echo "checked";}?>><br>
        <label for="other">Outro </label>
        <input type="radio" id="other" name="gender" value="other" <?php if(isset($gender) && $gender == "other"){ echo "checked";}?>>
        <span class="error">* <?php echo $genderErr?></span><br>
        <input type="submit" value="enviar">
    </form>
    <!--video autoplay controls><source src="Surrender+-+AMV+_「Anime+ＭＶ」.mp4"></video-->
</body>
</html>


