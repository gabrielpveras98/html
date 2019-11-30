<!--Não funciona, está com algum erro-->
<?php
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false){
            echo "File is an image - ".$check["mime"].".";
            $uploadOk = 1;
        }else{
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if(file_exists($target_file)){
        echo "Desculpe, o arquivo já existe";
        $uploadOk = 0;
    }
    if($_FILES["fileToUpload"]["size"] > 500000){
        echo "Desculpe, o arquivo é muito grande";
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
        echo "Desculpe, Apenas JPG, JPEG, PNG e GIF são aceitos";
        $uploadOk = 0;
    }
    if($uploadOk == 0){
        echo "Desculpe, seu arquivo não foi enviado";
    }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
            echo "O arquivo ".basename($_FILES["fileToUpload"]["name"])."foi enviado com sucesso";
        }else{
            echo "Desculpe, ocorreu um erro ao enviar o arquivo";
        }
    }
?>