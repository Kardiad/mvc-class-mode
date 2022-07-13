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
        //Rutas que quieres que se ejecuten por get
        if(isset($_GET) && !empty($_GET) && $_GET['url']!=''){
            $routing->lanzarIndex($_GET);
        }
        //Rutas que quieres que se ejecuten por post
        if(isset($_POST) && !empty($_POST) && $_POST['url']!=''){
            $routing->otraPagina($_POST);
        }
        //Aquí iría la página de inicio
    }

    function __destruct(){
        $_POST = array();
        $_GET = array();
    }
}
$app = new App();
$app->runApp();
?>