<?php 

require 'connDB.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$id = $_SESSION['ID_USUARIO'];

$sql= "SELECT * FROM emprestimos.usuario WHERE id_usuario = '$id'";

$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

$nome = $row['nome_usuario'];
$cpf = $row['cpf_usuario'];
$login = $row['login_usuario'];
$email = $row['email_usuario'];

?>