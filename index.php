<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresta já! - Login</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/favicon.ico" alt="ícone do site">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Viga&display=swap" rel="stylesheet"> 
</head> 
  
<body> 
    <div class="wrapper">
        <nav class="main-nav" id="barraNav">
            <ul class="logo">
                <li><a href="pages/home.php"><img id="logo-box" src="images/favicon.ico"></a></li>
                <li id="logo-title">Empresta já!</li>
            </ul>
            <ul class="nav-items">
                <li><a href="pages/home.php">Home</a></li>
                <li><a href="pages/alterarCadastro.html">Alterar cadastro</a></li>
                <li><a href="pages/listarEmprestimos.html">Meus empréstimos</a></li>
                <li><a href="index.php">Login</a></li>
            </ul>
        </nav>
        
        <div class="box-container" id="formulario">

            <form action="pages/recebeLogin.php" method="post" name="formulario">
            <h3>Faça seu login para emprestar e cadastrar itens:</h3>
            <p>Login:
            <input  type="text" name="login" placeholder="Digite seu Login"></p>
            
            <p>Senha: <input type="password" name="senha" placeholder="Digite sua senha"></p>
            
            <input class="input-btn" type="submit" value=" Entrar"> 
            
            <a  class="main-btn" href="pages/cadastrarUsuario.php">Cadastro</a>
            </form>
        </div>
    </div>
    
</body>  
</html>


<?php


?>