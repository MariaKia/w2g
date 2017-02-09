<?php 

	criaConta($conexao,$_POST["email-cria"],$_POST["senha-cria"],$_POST['unidade'],$_POST['curso']$_POST['sexo'],$_POST['nome-cria'],$_POST['sobrenome-cria']);
	
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