<?php
    // params: ip/localhost, user, password, database
    $conn = mysqli_connect("localhost", "root", "EMPRESTIMOS"); 

    if ($conn == FALSE) {
        echo "Erro ao conectar no MySQL!";
        die("ERRO: Não foi possível conectar à base de dados (MySQL)" . mysqli_connect_error());
    }

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    $sql = "INSERT INTO EMPRESTIMOS.USUARIO (nome, cpf, login, email, senha) 
            VALUES ('$nome', '$cpf', '$login', '$email', '$senha')";

    $res = mysqli_query($conn, $sql);

    if($res) {
        header("Location: outraPagina.php"); 
        // ver como mostrar mensagem de confirmação na página ao invés de redirecionar o usuário
        // professor criou uma tabela que mostrar os usuarios cadastrados
    } else {
        echo "Erro ao inserir dados";
    }



?>