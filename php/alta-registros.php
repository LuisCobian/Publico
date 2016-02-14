<html>
<head>
	<title>Administracion</title>
	<link rel="stylesheet" type="text/css" href="page.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device.width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/custom.css">
	<link rel="stylesheet" type="text/css" href="csslog.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="page.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/registro.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	

		<center>

					<h1>Admistracion del sistema</h1>

				</center>

</head>
<br>
<br>

	<body>
		<header>
			
			<div class="col xs-8 col sm-8 col md-8 container pop" >
			<img src="user.png" width="40px">
				<a href="archivo-protegido.php">Cerrar Sesion</a>
				</div>
			</header>


	<div class="decorador">
	<center>
	
	<h1>Lista De Registros</h1>


	</center>
		<br>
<br>


</div>

<center>
<div class="container" >
	<div class="row">
		<div class=" col xs-8  col xs-8 col sm-8 col md-8 agrCont" >
			
					<p class="col-xs-4 col xs-4 col sm-4 col md-4"name="entrada">
					<input type="text" class="form-control" id="identi" placeholder="Numero de indentificacion" autofocus  />
				</p>

				<p class="col-xs-5 col xs-4 col sm-4 col md-4"name="entrada">
					<input type="text" class="form-control" id="categoria" placeholder="Famalia" autofocus  />
				</p>
				
		
				


				
				
					
				<p >
					<button class="btn btn-info " id="boton" >
						<span class="glyphicon glyphicon-plus" ></span>
					</button>
				</p>

				</div>


	</div>
			

					<br>
						<br>
							<br>
					<table class="table table-bordered col-xs-12" id="campo">
				<thead>
					<th>No</th>
					<th>puerco</th>
					<th>Familia</th>
                    <th>Monedas</th>
					<th>Billetes</th>
					<th>Dolares</th>
					<th>Total</th>	
					<th></th>
							
								
				</thead>
				<tbody id="table">
					
						
					
						
							
							
				
					
				</tbody>

			</table>
				<form action="enviar.php" method="post">

					<input type="type" class="Total" name="total"><br><br>
					<input type="type" class="fam" name="familia"><br><br>
					<input type="type" class="No"name="NO"><br><br>
					<input type="type" class="Id" name="id"><br><br>

					<input type="submit" value="enviar" class="btn btn-info" windth="200px">


				</form>
			
	</body>
	
	</html>