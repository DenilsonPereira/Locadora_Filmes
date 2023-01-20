<?php
   require '../persistence/dao_denilsonpereira.php';
   
   $objetoDenilson = new Denilson();
   $objetoDenilson->setprimeiroNome($_REQUEST['Primeiro Nome']);
   $objetoDenilson->setultimoNome($_REQUEST['Ultimo Nome']);
   
   
   $dao = new DAODenilson();
   $dao->cadastrarDenilson($objetoDenilson); 
 	
	header('Location: ../view/view_denilsonpereira.php');
	exit;
?>