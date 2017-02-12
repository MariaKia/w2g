<?php
	require_once('../logica-usuario.php');
	setUsuarioPesquisaGrupo($_POST["pesquisa"]);
	header("Location: ../busca.php");
	die();

?>