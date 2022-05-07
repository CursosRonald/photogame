<?php
class Server{
    public function serve(){
        // header para evitar los errores de cors
        Header("Access-Control-Allow-Origin: *");
        Header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
        Header("Access-Control-Allow-Headers: Content-Type, authorization");

        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        if($url == "/api/login" && $method == "POST"){
            include_once './loginRegistro/login.php';
        }
        if($url == "/api/registro" && $method == "POST"){
            include_once './loginRegistro/registro.php';
        }
        if($url == "/api/email" && $method == "POST"){
            include_once './loginRegistro/validarEmail.php';
        }
    }
}
$server = new Server;
$server->serve();
?>
