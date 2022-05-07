<?php
include './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

/* $usuario = $con->real_escape_string(htmlentities($_POST['usuario']));
$pass = $con->real_escape_string(htmlentities($_POST['password']));
$email = $con->real_escape_string(htmlentities($_POST['email'])); */


$request = json_decode(file_get_contents("php://input"));
$usuario = $request->usuario;
$email = $request->email;
$pass = $request->password;

$passEncriptada = password_hash($pass, PASSWORD_BCRYPT);
$ins = $con -> query("INSERT INTO usuarios VALUES(DEFAULT,'$usuario','$passEncriptada','$email',null)");

if ($ins) {
    $respuesta = array('res'=>'success');
    print json_encode($respuesta);
} else {
    $respuesta = array('res'=>'fail');
    print json_encode($respuesta);
}
}


?>
