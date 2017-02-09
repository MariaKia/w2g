 <!DOCTYPE html>
<html>

	<head>
		<title> W2G </title>

		<meta charset="utf-8">

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/site.css">
	</head>

<!--="homepage"-->
	<body>

	<?php
	
		function carregaClasses($nome){
			require_once('class/'.$nome.'.php');
		}
		spl_autoload_register('carregaClasses');
		error_reporting(E_ALL ^ E_NOTICE);


		require_once('conecta.php');
