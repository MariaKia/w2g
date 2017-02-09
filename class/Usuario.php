<?php 
	
	class Usuario {
		private $nome;
		private $id;
		private $curso;
		private $sexo;
		private $unidade;
		private $email;
		private $imagemurl;


		public function getImagemUrl(){
			return $this->imagemurl;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getId(){
			return $this->id;
		}
		public function getCurso(){
			return $this->curso;
		}
		public function getUnidade(){
			return $this->unidade;
		}
		public function getEmail(){
			return $this->email;
		}

		public function setImagemUrl($url){
			$this->imagemurl=$url;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}		
		public function setId($id){
			$this->id = $id;
		}		
		public function setCurso($curso){
			$this->curso = $curso;
		}		
		public function setSexo($sexo){
			$this->sexo= $sexo;
		}		
		public function setUnidade($unidade){
			$this->unidade = $unidade;
		}		
		public function setEmail($email){
			$this->email = $email;
		}		

		function __construct($nome,$id,$curso,$sexo,$unidade,$email){
			$this->nome = $nome;
			$this->id = $id;
			$this->curso = $curso;
			$this->unidade= $nome;
			$this->sexo= $sexo;
			$this->email = $email;
		}

}
	
 ?>