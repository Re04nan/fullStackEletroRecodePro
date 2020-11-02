<?php

	$server = "127.0.0.1";
	$user = "root";
	$password = "";
	$database = "fullstackeletro";
	
	$conn = mysqli_connect($server, $user, $password, $database);
	
	if(!$conn){
		die("Erro de conexão: ". mysqli_connect_error());
	}
	
?>