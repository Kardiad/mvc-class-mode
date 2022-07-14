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
    function cargarInicio(){
        $this->rutas->cargarVistaGet('Inicio', []);
    }
    function cargarOtroInicio(){
        $this->rutas->cargarVistaGet('otroInicio', []);
    }
    function cargarTercerInicio(){
        $this->rutas->cargarVistaGet('tercerInicio', []);
    }

    public function lanzarPostInicio(){
        $this->rutas->cargarVistaPost('postInicio', []);
    }
}

?>