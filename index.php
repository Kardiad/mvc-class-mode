<?php
namespace App\App;
use Rutas\Routing;
require_once('config.php');


class App {
    public $url = base_url;
    public $conn = dbcontent;
    public $user = dbuser;
    public $pass = dbpass;

    public function runApp(){
        $routing = new Routing($this->url);
        $haEntrado = false; //Sirve para la primera ejecución que vaya a index, en caso contrario no va a ningún lado
         /*Rutas que quieres que se ejecuten por post tiene que pasarse un parámetro recomendable usar ajax ç
        para menos quebraderos url='[nombre del archivo a acceder]'*/
        if(isset($_POST) && !empty($_POST)){
            $_POST['url']=$_GET['url'];
            $routing->ejecutarPosts();
            $haEntrado=true;
        }
        //Rutas que quieres que se ejecuten por get tiene que haber un parámetro ?url='[nombre del archivo a acceder]'
        if(isset($_GET) && !empty($_GET) && $_GET['url']!='' && empty($_POST)){
            $routing->ejecutarGets();
            $haEntrado=true;
        }
        //Aquí iría la página de inicio o la que quieres que se lance por defecto
        if(!$haEntrado){
            $routing->index();
        }
    }
}
$app = new App();
$app->runApp();
?>