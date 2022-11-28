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
            <?php 
                if(isset($_GET['cadastro'])) {
                    echo '<p class=message style="text-align:center;color:green"> Item cadastrado com sucesso.</p>';
                }
            ?>
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
            <p>Categoria:
            <input  type="text" name="categoria" placeholder="Digite a categoria do item">
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