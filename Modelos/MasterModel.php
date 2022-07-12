<?php
namespace App\Modelos;
use Tienda\App\App;
use PDO;
class MasterModel extends App{
    
    protected PDO $db;

    function __construct(){
        $this->db=new PDO($this->conn, $this->user, $this->pass);
    }
}

?>