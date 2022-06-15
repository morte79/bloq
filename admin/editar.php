<?php
include('../config/conn.php');
include('header.php');


$id = $_GET['id'];

$stmt = $connect->prepare("SELECT id, title, description FROM posts WHERE id = :id");

$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<?php include_once('header.php'); ?>

<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 class="main-title">Editar Posts</h1>
    </div>
    <form action="editar-fim.php" method="post" enctype="multipart/form-data">
        <?php foreach($results as $post): ?>
        <p><input type="hidden" value="<?=$post["id"]?>" name="id"></p>
        <p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
        <p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
        <?php endforeach; ?>
    </form>
    <input type="submit" value="EDITAR">
</main>
<?php include('footer.php');
