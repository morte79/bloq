<?php 
include('../config/conn.php');
// include('session.php')
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

// Preparar
$stmt = $connect->prepare("INSERT INTO users (login, senha)");
$stmt = $connect->prepare("SELECT * FROM users WHERE login = :LOGIN AND senha = :SENHA");

// Troca
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

// Executar

$stmt->execute();

if ($stmt->rowCount()==1) {
	$info= $stmt->fetch();
	/*var_dump($info);
	exit();*/
	$_SESSION['logado'] = true;
	$_SESSION['id'] = $info['id'];
	$_SESSION['nome'] = $info['nome'];
	$_SESSION['login'] = $info['login'];
	$_SESSION['senha'] = $info['senha'];
	header("Location:view2.php");
}else{
	echo 'Usuário não cadastrado.';
}

?>