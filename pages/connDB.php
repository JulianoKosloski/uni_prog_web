<?php 
// params: ip/localhost, user, password, database
$conn = mysqli_connect("localhost", "root","", "EMPRESTIMOS"); 

if ($conn == FALSE) {
    echo "Erro ao conectar no MySQL!";
    die("ERRO: Não foi possível conectar à base de dados (MySQL)" . mysqli_connect_error());
}
?>