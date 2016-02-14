<?php 


$host="localhost";//el nombre del servidor como es local en caso puede llevar una ip
$user="root";//el usuario que tiene el servidor
$db="puerco2016";
$No=$_POST["NO"];
$id=$_POST["id"];
$familia=$_POST["familia"];
$total=$_POST["total"];


		$con=mysql_connect($host,$user)or die("problemas a conectar");
		
		mysql_select_db($db,$con)or die("problemas a conectar");

		//mysql_query("INSERT INTO AltaUsuario(ID_Solicitud) Value($numero) ",$con);
		mysql_query("INSERT INTO registros(id,Puerco,Familia,Total) Values('$No','$id','$familia','$total')",$con);
		
		header("location:alta-registros.php");

		


 ?>