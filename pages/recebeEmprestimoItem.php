<?php
require 'connDB.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$item = $_POST['item'];
$datadev = $_POST['datadev'];

$id = $_SESSION['ID_USUARIO'];

$sql = "INSERT INTO emprestimos.usu_item (id_item, id_usuario, datadev) 
        VALUES (
            (SELECT id_item FROM emprestimos.item WHERE nome_item = '$item'),
            '$id',
            '$datadev')";

$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: listarEmprestimos.php?emp=1"); 
    // ver como mostrar mensagem de confirmação na página ao invés de redirecionar o usuário
    // professor criou uma tabela que mostrar os usuarios cadastrados
} else {
    echo "Erro ao inserir dados";
}
?>