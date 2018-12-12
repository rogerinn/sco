<?php
//iniciando sessão
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<title>SCO-Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Rogério Sandro Pereira Junior>> rogeriosandro@hotmail.com">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://www.logolynx.com/images/logolynx/2f/2f3480d89dab7a9a372c77857c9604d9.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/text.css">
<!--===============================================================================================-->
</head>
<?php
	//Variavel global de mensagem
	$msg = "";
	//Pegando valores da pagina
	$email		= $_POST['email'];
	$pass		= $_POST['pass'];
	//Tranformando post em variaveis fixas para criptografar
	$email1	= $email;
	$pass1 		= $pass;
	//Incluir conexção com o banco de dados
	include("conections/conection_bd_login.php");
	//Seleciona o usuario no banco de dados
	$banco = "SELECT `email` FROM `login` WHERE `email` = '".$email1."' " ;
	//Pega a quantidade de dados
	$conferir = $mysqli->query($banco);
	//Conta a quantidade de dados exibida pelo SELECT
	$contar_usuarios = $conferir->num_rows;
	//Cria regra de entrada do SELECT
	if ($contar_usuarios != 1) {
		//Mensagem de erro caso email seja diferente de '1'
		$msg = "Email invalido tente novamente";
	} else {
		//Verificar se a senha esta correta	
		$banco2 = "SELECT  `senha` FROM `login` WHERE  `senha` = '".$pass1."' ";
		//Pega quantidade de dados
		$conferir2 = $mysqli->query($banco2);
		//Contar o valor dos dados
		$contar_senha = $conferir2->num_rows;
		//Criar regra
		if ($contar_senha == 1) {
			$_SESSION['id'] = "crm78NVFMo";
			header("location: dashbord/");
		} else {
			$msg = "Senha inválida";
		}
	}
?>
</html>