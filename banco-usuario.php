<?php 
	require_once('conecta.php');
	require_once('class/Usuario.php');

	function buscaUsuario($conexao, $user, $pass){
		$email = mysqli_real_escape_string($conexao,$user);
		$query = "SELECT * FROM user WHERE email = '{$email}' AND senha = '{$pass}'";
		$resultado = mysqli_fetch_assoc(mysqli_query($conexao, $query));
		
		$usuario = new Usuario($resultado['nome'],$resultado['id'],$resultado['curso'],$resultado['sexo'],$resultado['unidades'],$resultado['email'],$resultado['profile-pic']);
		
		return $usuario;
	}


?>