<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	
	if(!isset($_SESSION['ID_USUARIO'])){
		
		header("Location: ../index.php?autentica=1"); 
	}

?>