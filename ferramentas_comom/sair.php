<?php 
error_reporting(0);
ini_set(“display_errors”, 0 );
//Abre sessão
ob_start();
session_start();
//Exclui todas as sessões
session_destroy();
header("location: ../");
?>
