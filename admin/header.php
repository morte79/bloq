<?php
include_once('../config/conn.php');
include('session.php');
// Preparar
$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");

// Executar
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>

<head>
	<title>Visualizar</title>
	<meta charset="utf-8">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- //CSS only -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- //JavaScript Bundle with Popper -->
	<!-- Css -->
	<link rel="stylesheet" href="style-adm.css">
	<!-- /Css -->
	<!-- Fonte Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<!-- /Fonte Awesome -->
</head>

<body>
	<h1>Visualização</h1>
	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
				<h2>Bom dia <?php echo $_SESSION['nome']?></h2>
				<p><a href="?sair">Deslogar</a></p>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a href="insert.php" class="nav-item">inserir</a>
					</li>
					
				</ul>
			</nav>
