<?php 

	class PostagemDao{
		private $conexao;

		function __construct($conexao){
			$this->conexao=$conexao;
		}


		function criaPostagem($idUsuario,$idGrupo,$postagem,$link){
			$query = "INSERT INTO `post-grupo` VALUES (DEFAULT,'{$postagem}','{$link}',DEFAULT,'{$idGrupo}')";
			return mysqlo_query($this->conexao,$query);
		}
		function pesquisaPostagens($grupoId){
			$query="";			
			$posts = mysqli_fetch_assoc(mysqli_query($this->conexao,$query));
			return $posts;
		}
		function pesquisaRespostas($postagemId){
			$query="";
			$respostas= mysqli_fetch_assoc(mysqli_query($this->conexao,$query));
		}

	}


 ?>