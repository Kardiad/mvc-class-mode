<h1>Clientes</h1>
<?php
    echo '<table class="tabla">';
    echo '<tr>
            <td>id</td>
            <td>nombre</td>
            <td>apellidos</td>
            <td>usuario</td>
            <td>contraseña</td>
            <td>mail</td>
        </tr>';
    foreach($params['clientes'] as $value){
        echo '<tr><td>'.$value->id.'</td><td>'.$value->nombre.'</td><td>'.$value->apellidos.'</td><td>'.$value->usuario.'</td><td>'.$value->contrasena.'</td><td>'.$value->mail.'</td></tr>';
    }
    echo '</table>';
?>