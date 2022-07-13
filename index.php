<?php
namespace Tienda\App;

use App\Rutas\Routing;
require_once('config.php');
class App {
    public $url = base_url;
    public $conn = dbcontent;
    public $user = dbuser;
    public $pass = dbpass;

    public function runApp(){
        $routing = new Routing($this->url);
        $haEntrado = false;
        //Rutas que quieres que se ejecuten por get tiene que haber un parámetro ?url='[nombre del archivo a acceder]'
        var_dump($_GET);
        var_dump($_POST);
        if(isset($_GET) && !empty($_GET) && $_GET['url']!=''){
            $routing->lanzarInicio();
            $haEntrado=true;
        }
        /*Rutas que quieres que se ejecuten por post tiene que pasarse un parámetro recomendable usar ajax ç
        para menos quebraderos url='[nombre del archivo a acceder]'*/
        if(isset($_POST) && !empty($_POST) && $_POST['url']!=''){
            $haEntrado=true;
            //$routing->otraPagina($_POST);
        }
        //Aquí iría la página de inicio
        if(!$haEntrado){
            $routing->index();
        }
    }

    function __destruct(){
        $_POST = array();
        $_GET = array();
    }
}
$app = new App();
$app->runApp();
?>