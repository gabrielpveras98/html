<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Alunos</title>
</head>
<body>
<form action="cadastrar.php" method="post" accept-charset="utf-8">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome"><br>
    <br>
    <label for="matricula">Matricula</label>
    <input type="text" name="matricula" id="matricula"><br>
    <br>
    <label for="curso">Curso</label>
    <select id="curso" name="curso">
        <option value="si">Sistemas de informação</option>
        <option value="gti">GTI</option>
        <option value="es">Engenharia de sistemas</option>
    </select><br>
    <br>
    <input type="submit" name="Cadastrar" value="Cadastrar">
</form>
</body>
</html>


