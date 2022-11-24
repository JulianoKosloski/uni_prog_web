<?php
require 'connDB.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO emprestimos.usuario (nome_usuario, cpf_usuario, login_usuario, email_usuario, senha_usuario) 
        VALUES ('$nome', '$cpf', '$login', '$email', '$senha')";

$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: ../index.php?cadastro=1"); 
} else {
    echo "Erro ao inserir dados";
}



?>