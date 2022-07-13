<?php

namespace App\Controlador;

use App\Rutas\Routing;
use Tienda\App\App;
use Tienda\Modelos\Cliente;

class ClienteControlador extends App{
    //Instancia una ruta del servidor que puede que se use posteriormente, en caso de que no lo quitaré porque ocupa en memoria.
    public Routing $rutas;
    function __construct(){
        $this->rutas = new Routing($this->url);
    }
    //Aquí puedes crear los métodos que quieras del controlador, funcionaría como cualquier controlador.
    public function index(String $endpoint, array $params){
        $cliente = new Cliente();
        $array = array('nombre'=>'Dawn', 'apellidos'=>'Fowler Thornton', 'usuario'=>'GC5', 'contrasena'=>'72D', 'mail'=>'cum.sociis@hotmail.com');
        $cliente->setCliente($array);
        $this->rutas->cargarVistaGet('Vista', $cliente);
    }
    public function cargarOtraPagina(String $endpoint, array $params){
        $this->rutas->cargarVistaGet('otravista', []);
    }
}

?>