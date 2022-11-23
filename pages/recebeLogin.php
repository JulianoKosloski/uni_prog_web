<?php
require 'connDB.php';

// #TODO Felipe: login, authentication (comparar login/senha com database), organizar paginas (iniciar com login e só permitir
// que um usuario logado veja  o website), armazenar info de login usando session ou cookies

$login = $_POST['login'];
$senha = $_POST['senha'];

// query $sql
// redirecionar usuario para home ou indicar que os dados informados são invalidos

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