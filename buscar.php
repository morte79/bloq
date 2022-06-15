<?php
include "config/conn.php";

$buscar = $_GET['buscar'];

// Preparar
$stmt = $connect->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'");

// Executar
$stmt->execute();

$search = $stmt ->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de busca</title>
</head>
<body>
<div class="container">
    <h2>Resultado da Busca</h2>
    <?php foreach($search as $busque => $value): ?>
		<h5 class="card-title">
		<a href="viewPost.php?id=<?= $value["id"] ?>">
			<?= $value["title"] ?>
		</a>
		</h5>
        <?php endforeach; ?>
</div>
</body>
</html>