<?php
require 'connDB.php';
// connect base de dados
// update sql query INSERT INTO usuarios (dsadsa,dsadsa,) VALUES ($dsadas,$dsadas)

session_start();

$newnome = $_POST['newnome'];
$newcpf = $_POST['newcpf'];
$newlogin = $_POST['newlogin'];
$newemail = $_POST['newemail'];
$senha = $_POST['senha'];
$newsenha = $_POST['newsenha'];
$newsenha1 = $_POST['newsenha1'];

$sql = "UPDATE emprestimos.usuarios 
        SET 
        nome_usuario = '$newnome',
        cpf_usuario = '$newcpf',
        login_usuario = '$newlogin', 
        email_usuario = '$newemail',
        senha_usuario = '$newsenha',
        WHERE id_usuario = '$_SESSION['ID_USUARIO']' AND senha_usuario = '$senha'";

$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: alterarCadastro.php?alterado=1"); 
    // ver como mostrar mensagem de confirmação na página ao invés de redirecionar o usuário
    // professor criou uma tabela que mostrar os usuarios cadastrados
} else {
    echo "Erro ao inserir dados";
}
?>