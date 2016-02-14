<?php 
	
	error_reporting(E_ALL ^  E_NOTICE );
 	
	
	$host="localhost";//el nombre del servidor como es local en caso puede llevar una ip
	$user="root";//el usuario que tiene el servidor
	$db="puerco2016";
	$num=$_POST["id"];
	$puerco=$_POST["puerco"];
	$familia=$_POST["familia"];
	$total=$_POST["total"];
	
	

$conexions=mysql_connect($host,$user)or die("no se conecto a la base");

			mysql_select_db($db)or die("no se pudo seleccionar la base de datos");



$consultar="UPDATE registros SET  Puerco='$puerco',Familia='$familia',Total='$total'WHERE id='$num' ";
		
		
		$ejecutars=mysql_query($consultar,$conexions)or die("no se pudo hacer la consulta");//la consulta
	
		
		header("location:archivo-protegido.php");
	
		
    	
 ?>