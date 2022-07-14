<h2>
    Facturas
</h2>

<?php

echo "<table>";
echo "<tr><td>id</td><td>nombre</td><td>apellidos</td><td>usuario</td><td>contrasena</td><td>mail</td><td>codigo</td><td>importe</td><td>producti</td><td>descripcion</td></tr>";
foreach($params['pago'] as $value){
    echo "
    <tr>
        <td>".$value->id."</td>
        <td>".$value->username."</td>
        <td>".$value->apellidos."</td>
        <td>".$value->usuario."</td>
        <td>".$value->contrasena."</td>
        <td>".$value->mail."</td>
        <td>".$value->codigo."</td>
        <td>".$value->importe."</td>
        <td>".$value->nombre."</td>
        <td>".$value->descripcion."</td>
    </tr>";
}
echo "</table>";

?>