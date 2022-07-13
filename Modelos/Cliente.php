<?php


namespace Tienda\Modelos;


class Cliente{
    public String $nombre;
    public String $apellidos;
    public String $usuario;
    public String $contrasena;
    public String $mail;

    public function setCliente(array $params){
        $this->nombre = $params['nombre'];
        $this->apellidos = $params['apellidos'];
        $this->usuario = $params['usuario'];
        $this->contrasena = $params['contrasena'];
        $this->mail = $params['mail'];
    }

    public function getCliente(){
        return new Cliente($this->nombre, $this->apellidos, $this->usuario, $this->contrasena, $this->mail);
    }
}


?>