<?php 

	/**
	* 
	*/

	class Postagem{
		private $idPostagem;
		private $idUsuario;
		private $idGrupo;
		private $postagem;
		private $link;
		private $data;
		private $usuario;

		function getIdPostagem(){
			return $this->idPostagem;
		}
		function getIdUsuario(){
			return $this->idUsuario;
		}
		function getIdGrupo(){
			return $this->idGrupo;
		}
		function getPostagem(){
			return $this->postagem;
		}
		function getLink(){
			return $this->link;
		}		
		function getData(){
			return $this->data;
		}
		function getUsuario(){
			return $this->usuario;
		}
		function setIdPostagem($idPostagem){
			$this->idPostagem=$idPostagem;
		}
		function setIdUsuario($idUsuario){
			$this->idUsuario=$idUsuario;
		}
		function setIdGrupo($idGrupo){
			$this->idGrupo=$idGrupo;
		}
		function setPostagem($postagem){
			$this->postagem=$postagem;
		}
		function setLink($link){
			$this->link=$link;
		}		
		function setData($data){
			$this->data;
		}
		
		
		function __construct($conexao,$idPostagem,$idUsuario,$idGrupo,$postagem,$link,$data){
			$this->idPostagem=$idPostagem;
			$this->idUsuario=$idUsuario;
			$uDao = new UsuarioDao($conexao);
			$this->usuario= $uDao->buscaUsuario($idUsuario);
			$this->idGrupo=$idGrupo;
			$this->postagem=$postagem;
			$this->link=$link;
			$this->data=$data;
		}
		
	}

 ?>