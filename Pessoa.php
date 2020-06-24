
<?php
	class Pessoa{
		public $nome;
		public $cpf;
		public $sexo;
		public $reservista;
		public $imagem;
        public $email;
        public $senha;

		function __construct($nome, $cpf, $sexo, $reservista, $imagem, $email, $senha){
		
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->sexo= $sexo;
			$this->reservista=$reservista;
			$this->imagem= $imagem;
			$this->email = $email;
			$this->senha= $senha;

		}	
		
		
	}
?>