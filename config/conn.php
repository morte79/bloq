<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "blog";

try{
	$connect = new PDO("mysql:dbname=blog; host=localhost", "root", "");
}catch(Exception $err){
	echo "Erro na conexão";
}

?>