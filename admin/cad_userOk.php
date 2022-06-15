<?php
include "../config/conn.php";

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);

// Preparar
$stmt = $connect->prepare("INSERT INTO users (nome, login, senha) VALUES (:nome,:login,:senha)");

// Trocar
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $senha);

// Executar
$stmt->execute();

header("Location:cad_user.php");
?>