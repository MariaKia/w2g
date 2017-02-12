<?php 
	require_once('../conecta.php');
	require_once('../logica-usuario.php');
	require_once('../banco-usuario.php');
	require_once('../class/UsuarioDao.php');
	require_once('../class/Usuario.php');
	require_once('../class/Grupo.php');
	require_once('../class/GrupoDao.php');
	

	$gDao = new GrupoDao($conexao);
	
	$gDao->deletaGrupo($_GET['id'],usuarioLogadoId());
	
	header("Location: ../homepage.php");
 ?>