<?php
session_start();


function usuarioEstaLogado(){
	return isset($_SESSION["u_logado"]);
}

function usuarioLogadoId(){
	return $_SESSION['u_id'];
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
function usuarioImagem(){
	return $_SESSION["u_imagem"];
}

function usuarioPesquisaGrupo(){
	return $_SESSION["u_pesquisa"];
}

function setUsuarioPesquisaGrupo($str){
	$_SESSION["u_pesquisa"] = $str;
}

function loga($usuario){
	$_SESSION["u_id"] = $usuario->getId();
	$_SESSION["u_logado"] = $usuario->getEmail();
	$_SESSION["u_nome"] = $usuario->getNome();
	$_SESSION["u_curso"] = $usuario->getCurso();
	$_SESSION["u_imagem"]= $usuario->getImagemUrl();
	$_SESSION["u_pesquisa"] = '-1';
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