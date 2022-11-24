<?php
require 'connDB.php';

session_start();

$item = $_POST['item'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO emprestimos.item (id_dono, nome_item, descricao_item, categoria_item) 
        VALUES ($_SESSION['ID_USUARIO'], $item, $descricao, $categoria)";

$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: cadastrarItem.php?cadastro=1"); 
} else {
    echo "Erro ao inserir dados";
}
?>