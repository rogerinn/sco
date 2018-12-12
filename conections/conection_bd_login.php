<?php
	//Informações de acesso
	$host 		= "localhost";
	$user		= "root";
	$pass		= "0089";
	$database	= "login_db";

	//Abrindo o mysql
	$mysqli = new mysqli($host,$user,$pass,$database);

	//Vefiricação de erro

	if(mysqli_errno()){
		trigger_error(mysqli_connect_error());
	} else {
		//Conectado
	}
	
?>
