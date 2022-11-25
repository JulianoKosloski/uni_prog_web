<?php 

require 'connDB.php';

$sql = "SELECT nome_item FROM emprestimos.item
        WHERE id_item NOT IN (SELECT id_item FROM emprestimos.usu_item)";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)) {
    echo "
        <tr> 
            <td>" . $row['nome_item'] . ", </td>
        </tr>
        ";
}

?>