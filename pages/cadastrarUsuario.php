<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresta já! - Cadastrar usuário</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../images/favicon.ico" alt="ícone do site">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Viga&display=swap" rel="stylesheet"> 
<!-----------------------inserir fontes e outros metadados aqui------------------------>
</head> 
<body>
  <div class="wrapper">
    <?php 
        include 'nav.php';
    ?>
    
    <div class="box-container" id="formulario">

      <form action="recebeCadastroUsuario.php" method="post" name="formulario_cadastro">
      <h3>Faça seu cadastro</h3>
      <p>Informe seu nome completo:
      <input  type="text" name="nome" placeholder="Digite seu nome">
      </p>
      <p>Informe seu CPF:
      <input  type="text" name="cpf" placeholder="Digite seu CPF">
      </p>
      <p>Informe seu Login:
      <input  type="text" name="login" placeholder="Digite seu Login">
      </p>
      <p>Informe seu email: 
      <input type="email" name="email" placeholder="Digite um e-mail">
      </p>
      <p>Informe sua senha: 
      <input type="password" name="senha" placeholder="Digite sua senha">
      </p>
      
      <input class="input-btn" type="submit" value="Cadastrar">
      <a class="main-btn" href="login.html">Voltar</a>
      
      </form>
    </div>

</div>
   
   
</body>

<!------------------------inserir scripts aqui----------------------->
<script></script>
  
</html>
<?php


?>