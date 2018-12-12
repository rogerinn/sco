<?php 
	//criando variaveis para conexão
	$host = "localhost";
	$user = "id7121828_rogerio0089";
	$pass = "rogerio0089";
	$database = "id7121828_cadastropp";
	// criando regra
	$mysqli = new mysqli($host,$user,$pass,$database);
	//verifica se houve erro
	if (mysqli_errno()){
		trigger_error(mysqli_connect_error());
	} else {
		#Conectado
	}
?>