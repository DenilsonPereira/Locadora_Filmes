<?php
   class Locacao{
   		private $codigo;
		private $dataLocacao;
		private $dataDevolucao;
		private $nomeFilme;
		private $nomeCliente;
		
		public function __construct($codigo=0, $dataLocacao="date", $dataDevolucao="date", $nomeFilme="text", $nomeCliente="text"){
			$this->codigo = $codigo;	
			$this->DataLocacao = $dataLocacao;
			$this->DataDevolucao = $dataDevolucao;
			$this->NomeFilme = $nomeFilme;
			$this->NomeCliente = $nomeCliente;
		}
		
		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setdataLocacao($dataLocacao){
			$this->DataLocacao = $dataLocacao;
		}
		
		public function getdataLocacao(){
			return $this->DataLocacao;
		}
		
		public function setdataDevolucao($dataDevolucao){
			$this->DataDevolucao = $dataDevolucao;
		}
		
		public function getdataDevolucao(){
			return $this->DataDevolucao;
		}
		
		public function setnomeFilme($nomeFilme){
			$this->NomeFilme = $nomeFilme;
		}
		
		public function getnomeFilme(){
			return $this->NomeFilme;
		}
		
		public function setnomeCliente($nomeCliente){
			$this->NomeCliente = $nomeCliente;
		}
		
		public function getnomeCliente(){
			return $this->NomeCliente;
		}
	
   }
?>