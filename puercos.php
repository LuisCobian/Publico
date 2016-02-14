<?php 

						
			function sumar(){
					$server="localhost";
					$user="root";
					$db="puerco2016";
					$password="";
					$conectar=new mysqli($server,$user,$password,$db)or die("no se pudo conectar");//conecta a la base de datos como un objeto

			$total=0;
			$conexion=$conectar;;//toma el valor del objeto
				

			$consulta="SELECT * FROM registros ";

			$ejecutar=$conexion->query($consulta);
			$num_regs=$ejecutar->num_rows;

			while ($registros=$ejecutar->fetch_assoc()) {
	
				for ($i=0; $i <$registros["id"] ; $i++) { //recorro el vector de registro i son el total de los registros registrados
							
							$total++;
							$suma=$total-1;
						}		
 			}	
			
			return $i;
			}
