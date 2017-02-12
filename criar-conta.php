<?php 
	require_once('conecta.php');
	require_once('logica-usuario.php');
	require_once('banco-usuario.php');
	require_once('class/UsuarioDao.php');
	require_once('class/Usuario.php');

	$uDao = new UsuarioDao($conexao);
	$user = new Usuario($_POST['nome-cria'].' '.$_POST['sobrenome-cria'],0,$_POST['curso'],$_POST['sexo'],$_POST['unidade'],$_POST["email-cria"],0);
	$resultadoConta = $uDao->CriarConta($user,$_POST["senha-cria"]);
	
	if($resultadoConta == NULL){
		#COLOCAR REDIRECIONADOR PRA DIZER QUE EMAIL JA TA SENDO USADO
		die();
	}



	$usuario = buscaUsuario($conexao,$_POST["email-cria"],$_POST["senha-cria"]);

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