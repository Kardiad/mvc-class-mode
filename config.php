<?php

//definicion de constantes globales que sólo sirven para app... quizá las borre, pero meh

define('base_url', 'http://localhost/tienda');
define('dbcontent', 'mysql:dbname=tienda;host=127.0.0.1');
define('dbuser', 'root');
define('dbpass', '');

//lanzamiento de modelo, controlador y rutas

require_once('./Modelos/Cliente.php');
require_once('./Controlador/ClienteControlador.php');
require_once('./Rutas/Routing.php');

?>