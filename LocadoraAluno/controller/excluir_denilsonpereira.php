<?php
       require '../persistence/dao_denilsonpereira.php';
   
   $objetoDao = new DAODenilson();
   $objetoDao->removerDenilson($_REQUEST['codigo']);
 	
	header('Location: ../view/view_denilsonpereira.php');
	exit;
?>