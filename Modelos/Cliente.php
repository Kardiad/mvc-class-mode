<?php

namespace Tienda\Modelos;
use PDO;

class Usuario{
    public String $nombre;
    public String $apellidos;
    public String $usuario;
    public String $contrasena;
    public String $mail;
    private PDO $db;

    function __construct(){
        $this->db = new PDO(dbcontent, dbuser, dbpass);
    }

    public function setCliente(array $params){
        var_dump($params);
        $this->nombre = $params['nombre'];
        $this->apellidos = $params['apellidos'];
        $this->usuario = $params['usuario'];
        $this->contrasena = $params['contrasena'];
        $this->mail = $params['mail'];
    }

    public function obtenerTodosClientes(){
        $sentencia = $this->db->prepare('SELECT * FROM usuario');
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultados;
    }

    public function insertarUsuarios(){
        $sentencia = $this->db->prepare('INSERT INTO usuario(nombre, apellidos, usuario, contrasena, mail) VALUES
            (?, ?, ?, ?, ?)');
        $sentencia->execute([$this->nombre, $this->apellidos, $this->usuario, $this->contrasena, $this->mail]);
    }
}


?>