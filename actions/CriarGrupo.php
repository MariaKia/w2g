<?php 
	require_once('../conecta.php');
	require_once('../logica-usuario.php');
	require_once('../banco-usuario.php');
	require_once('../class/UsuarioDao.php');
	require_once('../class/Usuario.php');
	require_once('../class/Grupo.php');
	require_once('../class/GrupoDao.php');
	

	$gDao = new GrupoDao($conexao);
	$grupo= new Grupo($_POST['grupoNome'],$_POST['descGrupo']);
	
	$resultadoGrupo = $gDao->criaGrupo($grupo,usuarioLogadoId());
	

	header("Location: ../grupo.php?id={$resultadoGrupo}");
	

 ?>