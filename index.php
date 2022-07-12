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
        $routing = new Routing($this->url);
        if(isset($_GET) && !empty($_GET)){
           
        }
        if(isset($_POST) && !empty($_POST)){
           
        }
        $routing->lanzarIndex();
    }
}
$app = new App();
$app->runApp();
?>