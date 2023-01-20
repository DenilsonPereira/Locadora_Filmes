<?php
    require_once 'conexao.php';
	include '../model/class_locacao.php';
	
	class DAOLocacao{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarLocacao(Locacao $locacao){
			$DataLocacao = $locacao->getdataLocacao();
			$DataDevolucao = $locacao->getdataDevolucao();
			$NomeFilme =  $locacao->getnomeFilme();
			$NomeCliente = $locacao->getnomeCliente();

			$sql = "INSERT INTO locacao (dataLocacao, dataDevolucao, nomeFilme, nomeCliente) VALUES ('$dataLocacao', '$dataDevolucao', '$nomeFilme', '$nomeCliente')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarLocacao(){
			$lista = $this->conexao->executarQuery("SELECT * FROM locacao");
			$arrayLocacao = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$locacao = new Locacao($linha['codigo'],$linha['dataLocacao'],$linha['dataDevolucao'],$linha['nomeFilme'],$linha['nomeCliente']);
				array_push($arrayLocacao,$locacao);
			}
			return $arrayLocacao;
		}
		
		public function removerLocacao($codigo){
			$sql = "DELETE FROM locacao WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>