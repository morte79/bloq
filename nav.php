<?php 
include_once "config/conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Blog :: Galdino</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- //CSS only -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- //JavaScript Bundle with Popper -->
	<!-- Css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- /Css -->
	<!-- Fonte Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<!-- /Fonte Awesome -->
</head>
<body>
	<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd">
		<div class="container-fluid">
			<a class="navbar-brand" href=""><img src="imagem/logo.png"></a>
    				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     				<span class="navbar-toggler-icon"></span>
   		 			</button>
  			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        					<li class="nav-item">
								<a href="index.php" class="nav-link active" aria-current="page" href="#">Início</a>
        					</li>
        					<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
        					</li>
        					<li class="nav-item dropdown">
          							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">outros</a>
          					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            						<li><a class="dropdown-item" href="#">Fale Conosco</a></li>
          						</ul>
        					</li>
       			 			<li class="nav-item">
        	 					<a class="nav-link"></a>
        					</li>
      					</ul>
      				<form class="d-flex" role="search" action="buscar.php" method="GET">
        				<input class="form-control me-2" type="search" placeholder="Pesquise" aria-label="Pesquise">
        			<button class="btn btn-outline-success" type="submit" name= "buscar">Pesquise</button>
      			</form>
    		</div>
 		 </div>
	</nav>