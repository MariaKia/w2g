<?php 


	class UsuarioDao{
		private $conexao;

		function __construct($conexao){
			$this->conexao = $conexao;
		}



		function buscaUsuario($id){
			$query="SELECT * FROM user WHERE id = {$id}";
			$resultado=mysqli_fetch_assoc(mysqli_query($conexao,$query));
			$usuario = new Usuario($resultado["nome"],$resultado['id'],$resultado['curso'],$resultado['sexo'],$resultado['unidade'],$resultado['email'],$resulado['profile-pic']);
			return $usuario;
		}

		function buscaUsuarioId($id){
			$query="SELECT * FROM user WHERE id = {$id}";
			$resultado=mysqli_fetch_assoc(mysqli_query($conexao,$query));
	
			$usuario = new Usuario('','','','','','');
			return $usuario;
		}


	 function CriarConta($usuario,$senhaCria){

	 		$query="SELECT * FROM user WHERE email={$usuario->getEmail()}";
	 		$resultadoTeste = mysqli_query($this->conexao,$query);
	 		if($resultadoTeste>=1){
	 			return NULL;
	 		}else{
	 			$query = "INSERT INTO user VALUES (NULL, '{$usuario->getNome()}', '{$usuario->getEmail()}', '{$usuario->getSexo()}', '{$usuario->getUnidade()}', '{$usuario->getCurso()}',DEFAULT , CURRENT_TIMESTAMP, '{$senhaCria}')";
				$resultado=mysqli_query($this->conexao,$query);
				return $resultado;	
	 		}		
	}

	function UsuarioFazParteDoGrupo($idUsuarioLogado,$idGrupo){
		$query = "SELECT * FROM lista-pessoas-grupo WHERE user_id = {$idUsuarioLogado} AND grupo_idgrupo={$idGrupo}";
		$resultadoTeste= mysqli_query($this->conexao,$query);
		return $resultadoTeste;
	}

	}



 ?>