<?php
namespace App\Controlador;
use App\Rutas\Routing;
use Tienda\App\App;
use Tienda\Modelos\Usuario;

class ClienteControlador extends App{
    //Instancia una ruta del servidor que puede que se use posteriormente, en caso de que no lo quitaré porque ocupa en memoria.
    public Routing $rutas;
    function __construct(){
        $this->rutas = new Routing($this->url);
    }
    //Aquí puedes crear los métodos que quieras del controlador, funcionaría como cualquier controlador.
    function cargarInicio(){
        $this->rutas->cargarVistaGet('Inicio', [], false);
    }
    function cargarOtroInicio(){
        $this->rutas->cargarVistaGet('otroInicio', [], false);
    }
    function cargarTercerInicio(){
        $this->rutas->cargarVistaGet('tercerInicio', [], false);
    }

    public function lanzarPostInicio(){
        $usuarios = new Usuario();
        $total = $usuarios->obtenerTodosClientes();
        $this->rutas->cargarVistaGet('postInicio', ['clientes'=>$total], false);
    }

    public function insertarUsuario(){
        if($_POST['url']=='funkoPop'){
            $usuarios = new Usuario();
            $usuarios->setCliente($_POST);
            $usuarios->insertarUsuarios();
            $this->rutas->cargarVistaPost('Inicio', [], true);
        }
    }

    public function ajaxUsuarios(){
        if($_GET['url']=='walter'){
            $usuarios = new Usuario();
            $clientes = $usuarios->obtenerTodosClientes();
            echo json_encode($clientes);
        }
    }
}

?>