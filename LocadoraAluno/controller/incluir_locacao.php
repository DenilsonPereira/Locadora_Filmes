<?php
  require '../persistence/dao_locacao.php';
   
  $objetoLocacao = new locacao();
  $objetoLocacao->setdataLocacao($_REQUEST['Data locacao']);
  $objetoLocacao->setdataDevolucao($_REQUEST['Data Devolucao']);
  $objetoLocacao->setnomeCliente($_REQUEST['Nome Cliente']);
  $objetoLocacao->setnomeFilme($_REQUEST['Nome Filme']);
 
   
  $dao = new DAOLocacao();
  $dao->cadastrarLocacao($objetoLocacao);
 	
	header('Location: ../view/view_locacao.php');
	exit;
?>