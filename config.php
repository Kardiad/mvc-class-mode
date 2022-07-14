<?php

//definicion de constantes globales que sólo sirven para app... quizá las borre, pero meh
$mainUrl = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].''.$_SERVER['REQUEST_URI'];
$baseUri = substr($mainUrl, 0, strrpos($mainUrl, '?'));

define('base_url', (strrpos($mainUrl, '?'))==false?$mainUrl:$baseUri);
define('url_route', $baseUri.'?url=');
define('dbcontent', 'mysql:dbname=tienda;host=127.0.0.1');
define('dbuser', 'root');
define('dbpass', '');
//lanzamiento de modelo, controlador y rutas

require_once('./Modelos/Cliente.php');
require_once('./Controlador/ClienteControlador.php');
require_once('./Rutas/Routing.php');
require_once('./Helpers/helper.php');

?>