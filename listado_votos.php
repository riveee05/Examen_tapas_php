<?php

include 'head.php';
session_start();
echo '<table>
    <thead>
        <th>Codigo tapa</th>
        <th>Nº votos</th>
    </thead>
    <tbody>';
        foreach($_SESSION['votos'] as $clave=>$valor)
        {
            echo'<tr>
                <td>'.$clave.'</td>
                <td>'.$valor.'</td>
            </tr>';
        }
    
    echo'</tbody>
</table>';
                                             
 
 include 'pie.php';

