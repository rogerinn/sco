<?php
//Link dianamico
$base = $_GET['login'];
switch ($base) {
	case 'log_2n0JOynIAw0rWkJyLPLkg0iyaVz5Sf5z':
		include "login/login_verificacao.php";
		break;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<title>SCO-Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Rogério Sandro Pereira Junior>> rogeriosandro@hotmail.com">
<!--===============================================================================================-->	
	  <link rel="icon" type="image/png" href="image/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/text.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="?login=log_2n0JOynIAw0rWkJyLPLkg0iyaVz5Sf5z">
					<span class="login100-form-title">
						Faça seu login
					</span>
					<div class="wrap-input100 validate-input" data-validate = "É necessário digitar o email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "É necessário digitar a senha">
						<input class="input100" type="password" name="pass" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>				
					<!-- Inicio espaçamento-->
					<div class="text-center p-t-12">
						<?php
						echo "<p class='erro_text'>$msg</p>";
						?>
					</div>
					<div class="text-center p-t-136">
					</div>
					<!-- Final espaçamento-->
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>