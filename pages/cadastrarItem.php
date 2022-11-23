<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresta já! - Cadastrar item</title>
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

            <form action="recebeCadastroItem.php" method="post" name="formulario">
            <h3>Cadastre seus itens em nosso banco de dados:
            </h3>
            <p>Item:
            <input  type="text" name="item" placeholder="Digite o nome do item">
            </p>
            <p>Descrição:</p>
            <p>
             <textarea cols="25" rows="10"></textarea>
            </p>
            
            <input class="input-btn" type="submit" value="Cadastrar">
            
            <a class="main-btn" href="../index.html">Voltar</a>
            
            </form>
        </div>

    </div>
   
</body>

<!------------------------inserir scripts aqui----------------------->
<script></script>
  
</html>
<?php


?>