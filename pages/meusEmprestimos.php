<?php 

//get emprestimos from db based on user id
require 'connDB.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$id = $_SESSION['ID_USUARIO'];
$atual= date("Y-m-d");


$sql = "SELECT * FROM emprestimos.usu_item AS eui JOIN emprestimos.item AS ei ON eui.id_item = ei.id_item AND eui.id_usuario = $id JOIN emprestimos.usuario AS eu on ei.id_dono = eu.id_usuario";



// $sql= FAZER CONSULTA QUE PEGA ITENS EMPRESTADOS DO USUARIO E DATA DE DEVOLUCAO  
// destacar data de devolucao (negrito ou algo assim) quando já estiver atrasado e permitir a devolucao de um item (usar form post?)

$res = mysqli_query($conn, $sql);


        echo"
        <table>
        <tr>
            <th><h3>Item</h3></th>
            <th>----</th>
            <th><h3>Data Devolução</h3></th>
            <th>----</th>
            <th><h3>Dono</h3></th>
        </tr>
        </table>";

while($row = mysqli_fetch_assoc($res)) {
    if($row['datadev'] < $atual){
           

        $dataVencida='<h3><--Voce precisa devolver esse item!</h3>';
        

        echo "
        <table>
        
        <tr>
            <td>". $row['nome_item'] . "  ---- </td> 
			<td>". $row['datadev'] . "  ----   </td>
            <td>". $row['nome_usuario'] . " </td>
            <td>". $dataVencida . " </td>
        </tr>
        </table>
        ";
    } else{
    echo "
        <table>
        
        <tr>
            <td>". $row['nome_item'] . "  ---- </td> 
			<td>". $row['datadev'] . "  ----   </td>
            <td>". $row['nome_usuario'] . " </td>
        </tr>
        </table>
        ";
    }
        
        
}


?>