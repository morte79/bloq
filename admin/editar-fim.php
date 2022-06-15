<?php
include_once('../config/conn.php');

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

// Preparar
$stmt= $connect->prepare("UPDATE posts SET id = :id, title = :title, description = :description WHERE id = :id");

// Trocar

$stmt->bindParam(":title", $title);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":id", $id);

// Executar
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

header("Location:view2.php");
?>
