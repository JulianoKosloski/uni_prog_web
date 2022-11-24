<?php 
require 'autentica.php';
require 'head.php';
require 'meusEmprestimos.php';
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
                <p>Itens emprestados por mim:</p>
                <?php 

                    //usar esse form para devolução de itens também
                
                ?>
                <p>Data devolução: </p>
                <p>Itens que peguei emprestado:</p>
                <p>Data devolução: </p>
        
                <a  class="main-btn" href="../index.php">Voltar</a>
        
            </form>
        </div>

    </div>
   
   
</body>

<script></script>
  
</html>
<?php


?>