<?php 

require 'connDB.php';

session_start();

$sql= "SELECT * FROM emprestimos.usuario WHERE id_usuario = '$_SESSION['ID_USUARIO'] '";

$row = mysqli_fetch_assoc($res);

$nome = $row['nome_usuario'];
$cpf = $row['cpf_usuario'];
$login = $row['login_usuario'];
$email = $row['email_usuario'];

?>