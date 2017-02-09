<?php 


	class UsuarioDao{
		private $conexao;

		function __construct($conexao){
			$this->conexao = $conexao;
		}



		function buscaUsuario($email){
			$query="SELECT * FROM user WHERE email = {$email}";
			$resultado=mysqli_fetch_assoc(mysqli_query($conexao,$query));
	
			$usuario = new Usuario('','','','','','');
			return $usuario;
		}

	}

		function criaConta($conexao,$email-cria,$senha-cria,$unidade,$curso,$sexo,,$nome-cria,$sobrenome-cria){

			$query="INSERT INTO user VALUES (NULL, '{$nome-cria." ".$sobrenome-cria}', '{$email-cria}', '{$sexo}', '{$unidade}', '{$curso}',DEFAULT , CURRENT_TIMESTAMP, '{$senha-cria}')";
			
			$resultado=mysqli_fetch_assoc(mysqli_query($conexao,$query));

			return $resultado;

		}

 ?>