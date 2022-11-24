<?php
	session_start();
	
	if(!isset($SESSION['ID_USUARIO'])){
		
		header("Location: ../index.php?autentica=1"); 
	}

?>