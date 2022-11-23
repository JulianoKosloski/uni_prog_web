<?php
require 'connDB.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO EMPRESTIMOS.USUARIO (nome, cpf, login, email, senha) 
        VALUES ('$nome', '$cpf', '$login', '$email', '$senha')";

$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: outraPagina.php"); 
    // ver como mostrar mensagem de confirmação na página ao invés de redirecionar o usuário
    // professor criou uma tabela que mostrar os usuarios cadastrados
} else {
    echo "Erro ao inserir dados";
}



?>