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
                if(isset($_GET['emp'])) {
                    echo '<p class=message style="text-align:center;color:green"> Item emprestado com sucesso.</p>';
                }
            ?>
            <form action="#" method="post" name="formulario">
                <h3>Meus empréstimos</h3>
                <p>Itens que peguei emprestado:</p>
                <?php 

                    require 'meusEmprestimos.php';
                
                ?>
        
                <a  class="main-btn" href="../index.php">Voltar</a>
        
            </form>
        </div>

    </div>
   
   
</body>

<script></script>
  
</html>
<?php


?>