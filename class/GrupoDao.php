<?php 

	class GrupoDao{
		private $conexao;

		function __construct($conexao){
			$this->conexao=$conexao;
		}
 

		function criaGrupo($grupo,$idDono){
			$query = "INSERT INTO grupo values (default, '{$grupo->getNome()}', '{$grupo->getDescricao()}', default, default,{$idDono})";
			mysqli_query($this->conexao,$query);
			$quey = "SELECT idgrupo FROM grupo WHERE `nome-grupo`='{$grupo->getNome()}' AND Dono={$idDono}";

			$resultado = mysqli_fetch_assoc(mysqli_query($this->conexao,$quey));
			
			return $resultado['idgrupo'];
		}


		function buscaGrupos($nome){
			$query = "SELECT * FROM grupo WHERE `nome-grupo` like '%{$nome}%'";
			$result = mysqli_query($this->conexao,$query);
			$grupos = array();

			while($grupo_array = mysqli_fetch_assoc($result)){
				$grupo = new Grupo($grupo_array['nome-grupo'],$grupo_array['descricao']);
				$grupo->setId($grupo_array['idgrupo']);
				array_push($grupos,$grupo);

			}

			return $grupos;
		}

		

		function carregaGrupo($idGrupo){
				$query="SELECT * FROM grupo WHERE idgrupo={$idGrupo}";
				$resultado=mysqli_fetch_assoc(mysqli_query($this->conexao,$query));
				$grupo = new Grupo($resultado['nome-grupo'],$resultado['descricao']);
				$grupo->setImagem($resultado['imagem-grupo']);
				$grupo->setId($idGrupo);
				$grupo->setDono($resultado['Dono']);

				return $grupo;
		}

		function deletaGrupo($idGrupo,$idDono){
			$query = "DELETE FROM `grupo` WHERE `grupo`.`idgrupo` = '{$idGrupo}' AND Dono = '{$idDono}'";
			return mysqli_query($this->conexao,$query);
		}

	}


 ?>