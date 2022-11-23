<?php
require 'connDB.php';



	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$sql= " SELECT * FROM USUARIO WHERE LOGIN_USUARIO = '$login' AND SENHA_USUARIO = '$senha'";
	

	$res = mysqli_query($conn, $sql);
	
	$qtdeRegistros = mysqli_num_rows($res);
	
	if($qtdeRegistros > 0 ){
	
		session_start();
		$row = mysqli_fetch_assoc($res);
		
		$_SESSION['ID_USUARIO'] = $row['ID_USUARIO'];
		$_SESSION['NOME_USUARIO'] = $row['NOME_USUARIO'];
		header("Location: home.php");
	
	}
	else{
		header("Location: index.php?erro=1");
	}



?>