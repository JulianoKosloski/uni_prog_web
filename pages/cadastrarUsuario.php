<?php 
require 'head.php';
?>

<body>
  <div class="wrapper">
    
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
        
      
        </form>
    </div>

</div>
   
   
</body>

<script></script>
  
</html>
<?php


?>