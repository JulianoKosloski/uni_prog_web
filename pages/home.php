<?php 
require 'autentica.php';
require 'head.php';
?>

<body>
    <div class="wrapper">
        <?php 
            include 'nav.php';
        ?>

        <div class="home-content" id="formulario">
            <h3>Home</h3>
            <p>Bem vindo(a) 
                <?php 
               
                echo $_SESSION['NOME_USUARIO']."!";
                ?>
            </p>
            <a  class="main-btn" href="cadastrarItem.php">Cadastrar novo item</a>
            <a  class="main-btn"href="emprestarItem.php">Emprestar</a>
        </div>
    </div>
</body>
</html>

<?php


?>