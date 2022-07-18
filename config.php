<?php

//definicion de constantes globales que sólo sirven para app... quizá las borre, pero meh
$mainUrl = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].''.$_SERVER['REQUEST_URI'];
$baseUri = substr($mainUrl, 0, strrpos($mainUrl, '?'));

define('base_url', (strrpos($mainUrl, '?'))==false?$mainUrl:$baseUri);
define('url_route', $baseUri.'?url=');
define('dbcontent', 'mysql:dbname=tienda;host=127.0.0.1');
define('dbuser', 'root');
define('dbpass', '');

//Autoloader, cuidado con los namespaces, todos ellos tienen que venir del padre, es decir, no hace falta poner al padre, lo entiende de manera predefinida que vienen desde el 
//archivo donde se hace la llamada. Otra nota, es obligatorio poner los nombres al igual que el archivo y tal. 

function autoloader($clase){
    $url = $clase.'.php';
    if(file_exists($url)){
        include_once $url;
    }else{
        var_dump($url);
    }
}

spl_autoload_register('autoloader');

?>