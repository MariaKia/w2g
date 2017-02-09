<?php
session_start();


function usuarioEstaLogado(){
	return isset($_SESSION["u_logado"]);
}
function usuarioLogado(){
	return $_SESSION["u_logado"];
}
function usuarioNome(){
	return $_SESSION["u_nome"];
}
function usuarioCurso(){
	return $_SESSION["u_curso"];
}

function loga($usuario){
	$_SESSION["u_logado"] = $usuario->getEmail();
	$_SESSION["u_nome"] = $usuario->getNome();
	$_SESSION["u_curso"] = $usuario->getCurso();
}

function verificaLogado(){
	if (!usuarioEstaLogado()){
		header("Location: index.php");
		die();
	}
}

function verificaLogadoIndex(){
	if (usuarioEstaLogado()){
		header("Location: homepage.php");
		die();
	}
}

function logout(){
	session_destroy();
	session_start();
}