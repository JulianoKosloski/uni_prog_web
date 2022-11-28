<?php
require 'connDB.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$item = $_POST['item'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$id = $_SESSION['ID_USUARIO'];

$sql = "INSERT INTO emprestimos.item (id_dono, nome_item, descricao_item, categoria_item) 
        VALUES ('$id', '$item', '$descricao', '$categoria')";

$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: cadastrarItem.php?cadastro=1"); 
} else {
    echo "Erro ao inserir dados";
}
?>