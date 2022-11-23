<?php 
include 'head.php';
?> 

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

<script></script>
  
</html>
<?php


?>