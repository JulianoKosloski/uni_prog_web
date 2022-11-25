<?php 
//dá unset nas variaveis de sessão e move usuario para a tela de login
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

unset($_SESSION['ID_USUARIO']);
unset($_SESSION['NOME_USUARIO']);

header("Location: ../index.php");
?>