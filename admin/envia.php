<?php 
include_once('../config/conn.php');
$title = $_POST['title'];
$data = $_POST['data'];
$description = $_POST['description'];
$arquivo = $_FILES['image'];
$stmt = $connect->prepare("INSERT INTO posts (title,  description, data, image) VALUES (:TITLE, :DESCRIPTION, :DATA, :IMAGE)");


move_uploaded_file($arquivo['tmp_name'],'../uploads/'.$arquivo['name']);

$image = 'uploads/'.$arquivo['name'];

$stmt->bindParam(":TITLE", $title);
$stmt->bindParam(":DESCRIPTION",$description);
$stmt->bindParam(":DATA",$data);
$stmt->bindParam(":IMAGE", $image);
$stmt->execute();
// Mudar guia
header("Location:view2.php");

?>