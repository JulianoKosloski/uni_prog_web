<?php 

//get emprestimos from db based on user id
require 'connDB.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$id = $_SESSION['ID_USUARIO'];
$atual= date("Y-m-d");
$item = $_POST['item'];





$sql = "DELETE FROM emprestimos.usu_item  WHERE nome_item = '$item' ";


$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: listarEmprestimos.php"); 
} else {
    echo "Erro ao inserir dados";
}

?>