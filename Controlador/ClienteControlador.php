<?php

namespace App\Controlador;

use App\Rutas\Routing;
use Tienda\App\App;
use Tienda\Modelos\Cliente;

class ClienteControlador extends App{
    public function index(){
        $cliente = new Cliente();
        $array = array('nombre'=>'Dawn', 'apellidos'=>'Fowler Thornton', 'usuario'=>'GC5', 'contrasena'=>'72D', 'mail'=>'cum.sociis@hotmail.com');
        $cliente->setCliente($array);
        $routing = new Routing($this->url);
        $routing->cargarVista('Vista/Vista.php', ['cliente'=>$cliente]);
    }
}

?>