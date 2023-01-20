<?php
    require_once 'conexao.php';
	include '../model/class_denilsonpereira.php';
	
	class DAODenilson{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarDenilson(Denilson $Denilson){
			$primeiroNome = $Denilson->getprimeiroNome();
			$ultimoNome = $Denilson->getultimoNome();
			

			$sql = "INSERT INTO denilsonpereira (primeiroNome, ultimoNome) VALUES ('$primeiroNome', '$ultimoNome')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarDenilson(){
			$lista = $this->conexao->executarQuery("SELECT * FROM denilsonpereira");
			$arrayDenilson = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$Denilson = new Denilson($linha['codigo'],$linha['primeiroNome'],$linha['ultimoNome']);
				array_push($arrayDenilson,$Denilson);
			}
			return $arrayDenilson;
		}
		
		public function removerDenilson($codigo){
			$sql = "DELETE FROM denilsonpereira WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>