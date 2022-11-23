<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresta já! - Home</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../images/favicon.ico" alt="ícone do site">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Viga&display=swap" rel="stylesheet"> 
</head> 
<body>
    <div class="wrapper">
        <?php 
            include 'nav.php';
        ?>

            <div class="home-content" id="formulario">
                <h3>Home</h3>
                <p>Bem vindo ao Empresta já!</p>
                <a  class="main-btn" href="cadastrarItem.php">Cadastrar novo item</a>
                <a  class="main-btn"href="emprestarItem.php">Emprestar</a>
            </div>
    </div>
</body>
</html>

<?php


?>