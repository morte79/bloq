<!DOCTYPE html>
<html>
<head>
	<title>Painel Administrativo</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- //CSS only -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- //JavaScript Bundle with Popper -->
	<!-- Css -->
	<link rel="stylesheet" href="style-login.css">
	<!-- /Css -->
</head>
<body class="text-center">
	<main class="form-login">
		<form method="post" action="logar.png">
			<img class="mb-4" src="../imagem/logo.png" alt="" width="70" height="70">
			<h3 class="h3">Painel Administrativo</h3>
			<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Login</label>
				<input type="text" class="form-control" id="formGroupExampleInput" name="login" placeholder="Login">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class ="form-label">Senha</label>
				<input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
			</div>
			<button type="submit" class="btn btn-primary">Entrar</button>
		</form>
	</main>

</body>
</html>