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
            <form action="recebeEmprestimoItem.php" method="post" name="formulario">
                <h3>Pegue um item emprestado!</h3>
                <p>Itens disponíveis:
                    <?php 
                    // TODO trazer itens disponiveis em uma tabela filtrando quais foram emprestados com um join
                    ?>

                </p>
                <p>Item: <input type="text" name="item" placeholder="Digite o nome do item"> </p>
                <p>Data devolução: <input type="date" name="datadev" placeholder="dd/mm/aa"> </p>
        
                <input  class="input-btn" type="submit" value="Pegar emprestado">
        
                <a  class="main-btn" href="../index.php">Voltar</a>
            </form>
        </div>

    </div>
   
   
</body>

<script></script>
  
</html>
<?php


?>