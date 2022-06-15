<?php
include('nav.php');
$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

// Nav

?>

<!-- Começo do Carrossel -->
<div id="Slides-Main" class="carousel slide" data-bs-ride="true">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#Slides-Main" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#Slides-Main" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#Slides-Main" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="imagem/img-1.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="imagem/img-2.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="imagem/img-3.jpg" class="d-block w-100" alt="...">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>
<!-- Fim do carrossel -->
<!-- Começo dos cards -->
<div class="container">
	<div class="row row-cols-1 row-cols-md-3 g-4">
		<?php foreach ($results as $post) : ?>
			<div class="col gy-5">
				<div class="centralizar">
					<img src="<?= $post["image"] ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">
							<?= $post["title"] ?>
						</h5>
						<p class="card-text">
							<?= $post["description"] ?>
						</p>
						<a href="viewPost.php?id=<?= $post["id"] ?>">
							<i class="fas fa-eye check-icon">Ver</i>
						</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
		<!-- Fim dos card -->
		<?php include('footer.php'); ?>