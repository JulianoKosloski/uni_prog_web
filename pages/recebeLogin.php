<?php
require 'connDB.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql= " SELECT * FROM emprestimos.usuario 
		WHERE login_usuario = '$login' AND senha_usuario = '$senha'";


$res = mysqli_query($conn, $sql);

$qtdeRegistros = mysqli_num_rows($res);

if($qtdeRegistros > 0 ){ //se há um registro, o usuário está autorizado

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	$row = mysqli_fetch_assoc($res);
	
	$_SESSION['ID_USUARIO'] = $row['id_usuario'];
	$_SESSION['NOME_USUARIO'] = $row['nome_usuario'];
	header("Location: home.php");

}
else{
	header("Location: ../index.php?erro=1");
}

?>