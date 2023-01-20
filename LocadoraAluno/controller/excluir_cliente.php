<?php
       require '../persistence/dao_Cliente.php';
   
   $objetoDao = new DAOCliente();
   $objetoDao->removerCliente($_REQUEST['codigo']);
 	
	header('Location: ../view/view_Cliente.php');
	exit;
?>