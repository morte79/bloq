<?php

include_once("header.php");
$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<main class="col-md-9 col-lg-10">
	
	<div class="container">
		<h1 id="main-title">Meus Posts</h1>

		<table class="table" id="contacts-table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Título</th>
					<th scope="col">Descrição</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($results as $post) : ?>
					<tr>
						<td scope="row" <?= $post["id"] ?>>id</td>
						<td scope="row" <?= $post["title"] ?>>Título</td>
						<td scope="row" <?= $post["description"] ?>>Descrição</td>
						<td class="actions">
							<a href="viewBlog.php?id=<?= $post["id"] ?>">Ver Mais
								<i class="fa-solid fa-eye"></i>
							</a>
							<a href="editar.php?id=<?= $post["id"] ?>">
								Editar<i class="fas fa-eye check-icon"></i>
							</a>
							<a href="delete.php?id=<?= $post["id"] ?>">X</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	</div>
</main>
<?php include('footer.php'); ?>