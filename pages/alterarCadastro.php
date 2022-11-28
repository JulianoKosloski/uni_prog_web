<?php 
require 'autentica.php';
require 'head.php';
require 'dadosUsuario.php';
?>

<body>
    <div class="wrapper">
        
        <?php 
            include 'nav.php';
        ?>
        
        <div class="box-container" id="formulario">

            <form action="recebeAlteracaoCadastro.php" method="post" name="formulario_cadastro">
                <h3>Edite seu cadastro:</h3>
                <?php 
                    if(isset($_GET['alterado'])) {
                        echo '<p class=message style="text-align:center;color:green"> Dados alterados com sucesso.</p>';
                    }
                ?>

                <p>Nome Atual: <?php echo $nome;?></p>
                <p>Informe seu novo nome:
                <input  type="text" name="newnome" placeholder="Digite seu novo nome">
                </p>
                <p>CPF Atual: <?php echo $cpf;?></p>
                <p>Informe novo CPF:
                <input  type="number" name="newcpf" placeholder="Digite outro CPF">
                </p>
                <p>Login Atual: <?php echo $login;?></p>
                <p>Informe seu novo login:
                <input  type="text" name="newlogin" placeholder="Digite seu novo Login">
                </p>
                <p>Email Atual: <?php echo $email;?></p>
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
        
                
            </form>
        </div>

    </div>
   
</body>

<script></script>
  
</html>
<?php


?>