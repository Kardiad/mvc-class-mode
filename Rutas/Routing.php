<?php

namespace App\Rutas;

use App\Controlador\ClienteControlador;
use Exception;
use Tienda\App\App;

class Routing extends App{
    
    //renderiza búsqueda en caso de que se haya hecho get a la ruta previamente parametrizada en controlador
    public function cargarVistaGet(String $endpoint, $params, bool $redirect){
        try{
            if($endpoint==$_GET['url'] && empty($_POST)){
                include_once('Vista/Complementos/Header.php');
                include_once('Vista/'.$endpoint.'.php');
                include_once('Vista/Complementos/Footer.php');
            }else if($redirect){
                include_once('Vista/Complementos/Header.php');
                include_once('Vista/'.$endpoint.'.php');
                include_once('Vista/Complementos/Footer.php');
            }else{
                return false;
            }
        }catch(Exception $e){
            echo 'Ha ocurrido un error '.$e->getMessage();
        }
    }
    //renderiza búsqueda en caso de que se haya hecho post a la ruta previamente parametrizada en controlador
    public function cargarVistaPost(String $endpoint, $params, bool $redirect){
        try{
            if($endpoint==$_POST['url']){
                include_once('Vista/Complementos/Header.php');
                include_once('Vista/'.$endpoint.'.php');
                include_once('Vista/Complementos/Footer.php');
            }else if($redirect){
                include_once('Vista/Complementos/Header.php');
                include_once('Vista/'.$endpoint.'.php');
                include_once('Vista/Complementos/Footer.php');
            }else{
                return false;
            }
        }catch(Exception $e){
            echo 'Ha ocurrido un error '.$e->getMessage();
        }
        
    }

    public function index(){
        include_once('Vista/Complementos/Header.php');
        include_once('Vista/Inicio.php');
        include_once('Vista/Complementos/Footer.php');
    }
    
    //Aquí se da de alta a todas las rutas instanciando al controlador y al método que hagas dentro del controlador. 
    public function lanzarInicio(){
        $controller = new ClienteControlador();
        $controller->cargarInicio();
    }

    public function ejecutarGets(){
        $controller = new ClienteControlador();
        $controller->lanzarPostInicio();
        $controller->cargarInicio();
        $controller->cargarOtroInicio();
        $controller->cargarTercerInicio();
    }

    public function ejecutarPosts(){
        $controller = new ClienteControlador();
        //$controller->lanzarPostInicio();
        $controller->insertarUsuario();
        return false;
    }
}

?>