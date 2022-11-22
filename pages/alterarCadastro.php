<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresta já! - Alterar cadastro</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../images/favicon.ico" alt="ícone do site">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Viga&display=swap" rel="stylesheet"> 
</head> 
<body>
    <div class="wrapper">
        <nav class="main-nav" id="barraNav">
            <ul class="logo">
                <li><a href="home.php"><img id="logo-box" src="../images/favicon.ico"></a></li>
                <li id="logo-title">Empresta já!</li>
            </ul>
            <ul class="nav-items">
                <li><a href="home.php">Home</a></li>
                <li><a href="alterarCadastro.php">Alterar cadastro</a></li>
                <li><a href="listarEmprestimos.php">Meus empréstimos</a></li>
                <li><a href="../login.php">Login</a></li>
            </ul>
        </nav>
        
        <div class="box-container" id="formulario">

            <form action="recebeAlteracaoCadastro.php" method="post" name="formulario_cadastro">
                <h3>Edite seu cadastro:</h3>
        
                <p>Nome Atual:</p>
                <p>Informe seu novo nome:
                <input  type="text" name="newnome" placeholder="Digite seu novo nome">
                </p>
                <p>CPF Atual:</p>
                <p>Informe novo CPF:
                <input  type="text" name="newcpf" placeholder="Digite outro CPF">
                </p>
                <p>Login Atual:</p>
                <p>Informe seu novo login:
                <input  type="text" name="newlogin" placeholder="Digite seu novo Login">
                </p>
                <p>Email Atual:</p>
                <p>Informe seu novo email:
                <input type="email" name="newemail" placeholder="Digite seu novo e-mail">
                </p>
                <p>Informe sua senha atual: 
                <input type="password" name="senha" placeholder="Digite sua senha atual">
                </p>
                <p>Informe sua nova senha : 
                <input type="password" name="newsenha" placeholder="Digite sua nova senha">
                </p>
                <p>Confirme sua nova senha : 
                <input type="password" name="newsenha1" placeholder="Confirme sua nova senha">
                </p>
        
                <input  class="input-btn" type="submit" value="Alterar"> 
        
                <a  class="main-btn" href="../index.html">Voltar</a>
            </form>
        </div>

    </div>
   
</body>

<!------------------------inserir scripts aqui----------------------->
<script></script>
  
</html>
<?php


?>