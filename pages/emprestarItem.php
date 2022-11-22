<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresta já! - Emprestar</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="images/favicon.ico" alt="ícone do site">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Viga&display=swap" rel="stylesheet"> 
<!-----------------------inserir fontes e outros metadados aqui------------------------>
</head> 
<body>
    <div class="wrapper">
        <nav class="main-nav" id="barraNav">
            <ul class="logo">
                <li><a href="../index.html"><img id="logo-box" src="../images/favicon.ico"></a></li>
                <li id="logo-title">Empresta já!</li>
            </ul>
            <ul class="nav-items">
                <li><a href="../index.html">Home</a></li>
                <li><a href="alterarCadastro.html">Alterar cadastro</a></li>
                <li><a href="listarEmprestimos.html">Meus empréstimos</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
        
        <div class="box-container" id="formulario">
            <form action="recebeEmprestimoItem.php" method="post" name="formulario">
                <h3>Pegue um item emprestado!</h3>
                <p>Itens disponíveis:</p>
        
                <p>Data devolução: <input type=“date” name="datadev" placeholder="dd/mm/aa"> </p>
        
                <input  class="input-btn" type="submit" value="Pegar emprestado">
        
                <a  class="main-btn" href="../index.html">Voltar</a>
            </form>
        </div>

    </div>
   
   
</body>

<!------------------------inserir scripts aqui----------------------->
<script></script>
  
</html>
