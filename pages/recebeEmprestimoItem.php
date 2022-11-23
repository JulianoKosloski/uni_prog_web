<?php
require 'connDB.php';

$datadev = $_POST['datadev'];
    
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