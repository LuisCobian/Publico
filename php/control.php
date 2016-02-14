<?php //conrola si podra entrar a la sesion

include("conexion.php");
$nombre=$_POST["nombre_txt"];
$contra=$_POST["password_txt"];

$consulta="SELECT*FROM contactos WHERE email='$nombre' and clave='$contra'";//seleciono en la base de datos del campo email si hay un email igual al registro

$ejecutar=$conexion->query(utf8_decode($consulta));
	
	//incio la sesion
	session_start();
	//declaro mis variables de sesion
	$_SESSION["autentificado"]=true;
	$_SESSION["usuario"]=$ejecutar;
	header("location:archivo-protegido.php");







 ?>