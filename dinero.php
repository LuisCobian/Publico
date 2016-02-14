	<?php 
		function dinero(){

					
					$server="localhost";
					$user="root";
					$db="puerco2016";
					$password="";
					$conectar=new mysqli($server,$user,$password,$db)or die("no se pudo conectar");//conecta a la base de datos como un objeto
					$i=0;
					
					$conexion=$conectar;//toma el valor del objeto
						

					$consulta="SELECT SUM(Total) FROM registros ";

					$ejecutar=$conexion->query($consulta);
					
					
					while ($registros=$ejecutar->fetch_assoc()) {

							foreach ($registros as $elementos=>$value) {
								# code...
							$total=+$value;
							}
							
							
								
							

					}
					return $total;
			}


	 ?>
	