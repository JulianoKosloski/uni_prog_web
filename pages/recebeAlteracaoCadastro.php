<?php
require 'connDB.php';
// connect base de dados
// update sql query INSERT INTO usuarios (dsadsa,dsadsa,) VALUES ($dsadas,$dsadas)


$newnome = $_POST['newnome'];
$newcpf = $_POST['newcpf'];
$newlogin = $_POST['newlogin'];
$newemail = $_POST['newemail'];
$senha = $_POST['senha'];
$newsenha = $_POST['newsenha'];
$newsenha1 = $_POST['newsenha1'];

// Thales: query
// $sql = "";


// use esse padrao de resposta se for util
$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: outraPagina.php"); 
    // ver como mostrar mensagem de confirmação na página ao invés de redirecionar o usuário
    // professor criou uma tabela que mostrar os usuarios cadastrados
} else {
    echo "Erro ao inserir dados";
}
?>