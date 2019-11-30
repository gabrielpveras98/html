<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Cadastro de Usuário</h1>
		<form action="acoes_usuario.php" method="post">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email">
			</div>

			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" class="form-control" name="senha">
			</div>

			<button type="submit" class="btn btn-primary" name="acao" value="cadastrar">Cadastrar</button>
		</form>

	</div>
</body>
</html>