<?php 

//get emprestimos from db based on user id
require 'connDB.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$id = $_SESSION['ID_USUARIO'];

$sql= " SELECT * FROM emprestimos.usu_item 
		WHERE id_usuario = '$id' ";

// TODO falta fazer o resto
$res = mysqli_query($conn, $sql);

?>