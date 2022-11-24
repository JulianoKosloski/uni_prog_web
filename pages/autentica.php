<?php
	session_start();
	
	if(!isset($SESSION['ID_USUARIO'])){
		
		header("Location: index.php?autentica=1"); 
	}

	/*
	eu faria algo assim

	if(isset($SESSION['ID_USUARIO'])){ //se TIVER usuario registrado na sessão
		
		header("Location: home.php"); //manda direto para a home
	}

	daí dá para usar o NOME_USUARIO para mostrar um "Bem-vindo(a) FULANO!" na home

	e colocar um botão "Sair" na navegação para dar unset no ID_USUARIO e NOME_USUARIO e jogar de volta na tela de login

	pq do jeito que está eu acho que vai mostrar "Você não tem permissão de acesso" toda vez que alguém entrar 
	sem ter feito o login antes.
	*/
?>