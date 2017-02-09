<?php
	require_once('banco-usuario.php');
	require_once('logica-usuario.php');

	$usuario = buscaUsuario($conexao,$_POST["email"],$_POST["senha"]);
	//echo "{$usuario} ESTÁ LOGADO"; 

	if($usuario == null) {
		$_SESSION["danger"] = "Usuário ou senha inválido.";
		header("Location: index.php");
	} else {
		$_SESSION["success"] = "Usuário logado com sucesso.";
		loga($usuario);
		header("Location: homepage.php");
	}
	die();


?>