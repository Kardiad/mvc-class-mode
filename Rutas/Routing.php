<?php

namespace App\Rutas;

use App\Controlador\ClienteControlador;
use Exception;
use Tienda\App\App;

class Routing extends App{
    
    //renderiza búsqueda en caso de que se haya hecho get a la ruta previamente parametrizada en controlador
    public function cargarVistaGet(String $endpoint, $params){
        try{
            if($endpoint==$_GET['url']){
                include_once('Vista/Complementos/Header.php');
                include_once('Vista/'.$endpoint.'.php');
                include_once('Vista/Complementos/Footer.php');
            }else{
                echo 'no tienes acceso a esta página con ese método';
            }
        }catch(Exception $e){
            echo 'Ha ocurrido un error '.$e->getMessage();
        }
    }
    //renderiza búsqueda en caso de que se haya hecho post a la ruta previamente parametrizada en controlador
    public function cargarVistaPost(String $endpoint, $params){
        try{
            if($endpoint==$_POST['url']){
                include_once('Vista/Complementos/Header.php');
                include_once('Vista/'.$endpoint.'.php');
                include_once('Vista/Complementos/Footer.php');
            }else{
                echo 'no tienes acceso a esta página con ese método';
            }
        }catch(Exception $e){
            echo 'Ha ocurrido un error '.$e->getMessage();
        }
        
    }
    //Aquí se da de alta a todas las rutas instanciando al controlador y al método que hagas dentro del controlador. 
    
}

?>