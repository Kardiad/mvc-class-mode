<?php
namespace Tienda\App;

use App\Rutas\Routing;
require_once('config.php');
class App {
    public $url = base_url;
    public $conn = dbcontent;
    public $user = dbuser;
    public $pass = dbpass;

    function __construct(){
        require_once('config.php');
    }

    public function runApp(){
        if(isset($_GET)){
            $routing = new Routing('a');
            $routing->lanzarIndex();
        }
        if(isset($_POST)){
            $routing = new Routing($_POST);
        }
    }
}
$app = new App();
$app->runApp();
?>