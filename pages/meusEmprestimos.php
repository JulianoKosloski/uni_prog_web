<?php 

//get emprestimos from db based on user id
require 'connDB.php';

session_start();

$sql= " SELECT * FROM emprestimos.usu_item 
		WHERE id_usuario = '$_SESSION['ID_USUARIO']'";

// TODO falta fazer o resto
$res = mysqli_query($conn, $sql);

?>