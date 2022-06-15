<?php 
require_once('../config/conn.php');
$stmt = $connect->prepare("DELETE FROM posts WHERE id = :iD");

$id = $_GET['id'];

$stmt->bindParam(":iD", $id);
$stmt->execute();

echo "Registro apagado!";

header("Location: view2.php");
?>