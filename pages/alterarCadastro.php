<?php 
require 'autentica.php';
require 'head.php';
?>

<body>
    <div class="wrapper">
        
        <?php 
            include 'nav.php';
        ?>
        
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
        
                <a  class="main-btn" href="../index.php">Voltar</a>
            </form>
        </div>

    </div>
   
</body>

<script></script>
  
</html>
<?php


?>