<?php 

//get emprestimos from db based on user id
require 'connDB.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$id = $_SESSION['ID_USUARIO'];

// $sql= FAZER CONSULTA QUE PEGA ITENS EMPRESTADOS DO USUARIO E DATA DE DEVOLUCAO  
// destacar data de devolucao (negrito ou algo assim) quando já estiver atrasado e permitir a devolucao de um item (usar form post?)

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)) {
    echo "
        <tr> 
            <td>" . $row['nome_item'] . ", </td>
			<td>" . $row['datadev'] . ", </td>
        </tr>
        ";
}

?>