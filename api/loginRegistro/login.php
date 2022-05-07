<?php
include_once './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
/* $email = $con ->real_escape_string(htmlentities($_POST['email']));
$pass = $con ->real_escape_string(htmlentities($_POST['password'])); */
$request = json_decode(file_get_contents("php://input"));
$email = $request->email;
$pass = $request->password;
//var_dump($request);
/* var_dump($email); */
$sel = $con->query("SELECT id, usuario,contraseña,email FROM usuarios WHERE email = '$email' ");

if ($f = $sel->fetch_assoc()) {
   $correo = $f['email'];
   $password = $f['contraseña'];
   $id = $f['id'];
}

$passEncriptada = password_verify($pass,$password);

if ($email == $correo && $passEncriptada == true) {


	$token = sha1(rand(0000,9999));

	$up = $con->query("UPDATE usuarios SET token = '$token' WHERE id = '$id' ");
	if ($up) {
		$respuesta = array('token' => $token ,'res'=>'success', 'datos' => $f);
        print json_encode($respuesta);
	}

} else {
    $respuesta = array('token' => '' ,'res'=>'fail' );
    print json_encode($respuesta);
}
$sel->close();
$con->close();
}
?>
