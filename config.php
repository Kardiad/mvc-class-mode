<?php

define('base_url', 'http://localhost/tienda');
define('dbcontent', 'mysql:dbname=tienda;host=127.0.0.1');
define('dbuser', 'root');
define('dbpass', '');

require_once('./Modelos/Cliente.php');
require_once('./Controlador/ClienteControlador.php');
require_once('./Rutas/Routing.php');

?>