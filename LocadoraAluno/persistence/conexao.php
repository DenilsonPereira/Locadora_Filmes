<?php
    class Conexao{
    	private $host;
		private $usuario;
		private $senha;
		private $banco;
		private $conexao;
		
		public function __construct(){
			$this->host = "127.0.0.1";
			$this->usuario = "root";
			$this->senha = "";
			$this->banco = "locadora";
		}
		
		public function conectar(){
			$this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);
			if(!$this->conexao){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				return false;
			}else{
				mysqli_query($this->conexao, "SET NAMES 'utf8';");
				return true;
			}		
		}
		
		public function executarQuery($sql){
			return mysqli_query($this->conexao, $sql);
		}
    }
	
?>