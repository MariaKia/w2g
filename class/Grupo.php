<?php 

	/**
	* 
	*/

	class Grupo
	{	private $id = 100;
		private $nome;
		private $descricao;
		private $imagem;
		private $dono;

		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getDono(){
			return $this->dono;
		}
				
		public function setId($id){
			$this->id = $id;
		}
		public function getImagem(){
			return $this->imagem;
		}
		public function setImagem($url){
			$this->imagem = $url;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setDescricao($nome){
			$this->descricao=$nome;
		}
		public function setDono($dono){
			$this->dono=$dono;
		}


		function __construct($nome,$descricao){
			$this->descricao=$descricao;
			$this->nome=$nome;

		}
	}

 ?>