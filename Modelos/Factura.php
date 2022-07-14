<?php

namespace Tienda\Modelos;
use PDO;

class Factura{
    public String $codigo;
    public float $importe;
    public int $idUsuario;
    public PDO $db; 

    function __construct(){
        $this->db = new PDO(dbcontent, dbuser, dbpass);
    }

    public function setFactura(array $params){
        $this->codigo= $params['codigo'];
        $this->importe = doubleval($params['importe']);
        $this->idUsuario = intval($params['idUsuario']);
    }

    public function setPropietario(int $id){
        $this->idUsuario = intval($id);
    }

    public function obtenerFacturasConPropietarios(){
        $sentencia = $this->db->prepare(
            'SELECT usuario.id, usuario.nombre as username, usuario.apellidos, usuario.usuario, usuario.contrasena, usuario.mail, factura.codigo, factura.importe, producto_factura.cantidad, producto.nombre, producto.descripcion 
            FROM usuario 
            JOIN factura ON usuario.id=factura.id_usuario 
            JOIN producto_factura ON factura.id=producto_factura.id_factura 
            JOIN producto ON producto_factura.id_producto = producto.id
            ORDER BY usuario.nombre ASC');
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }
}

?>