<!DOCTYPE html>
<html>
<head>
	<title>Inserir</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- //CSS only -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- //JavaScript Bundle with Popper -->
	<!-- Css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- /Css -->
</head>
<body>
	<h1>Inserir</h1>
	<main>
		<div class="container">
			<form action="envia.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
  				<label for="exampleFormControlInput1" class="form-label">Titulo:</label>
  				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="mb-3">
				<input type="date" class="form-control" id="date" name="data">
			</div>
			<div class="mb-3">
  				<label for="exampleFormControlTextarea1" class="form-label">Texto descritivo:</label>
  				<textarea class="form-control" id="description" rows="3" placeholder="Descrição" name="description"></textarea>
			</div>
			<div class="mb-3">
				<label>Envie a imagem</label><input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image" id="image">
			</div>
			<div class="mb-3">
				<input type="submit" value="PUBLICAR" style="background-color: #1b98e0;">
			</div>
				
			</form>
    	</div>
	</main>
</body>
</html>