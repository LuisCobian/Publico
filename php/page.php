<?php 
error_reporting(E_ALL ^  E_NOTICE);//solo te pone los 
$op=$_GET["op"];//tomo lo que hay en la variable op

switch ($op) {
	case 'alta'://si op es igual a alta 
		$contenido="alta-registros.php";//lo mandas a la pagina
		$titulo="Alta de Registros";//muestras el titulo de  la pagina 
		break;
		
		/*case 'baja':
		$contenido="php/baja-contactos.php";
		$titulo="Baja de Contactos";
		break;
		
		case 'consultas':
		$contenido="php/consultas-contacto.php";
		$titulo="consultas de Contactos";
		break;
		
		case 'cambios':
		$contenido="php/cambios-contacto.php";
		$titulo="Cambios de Contactos";
		break;*/
	
	default:
		$contenido="home.php";
		$titulo="Mis contactos v1";
		break;
}
 ?>

<html>
<head>
	<title><?php echo $titulo; ?></title><!-- pone el titulo dependiendo del titulo de menu-->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css"/>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/contactos.js" >
	

	</script>
</head>
<body>
		<section id="contenido">

	<NAV>
		
			<ul>
				<li class="cambio "><a href="index.php">home</a></li>
				<li class="cambio "><a href="?op=alta">alta de usuario</a></li><!--cuando seleciono le mando una variable para validar arrba-->
				<li class="cambio "><a href="?op=baja">eliminar</a></li>
				<li class="cambio"><a href="?op=cambios">editar</a></li>
				<li class="cambio"><a href="?op=consultas">Consultas</a></li>
			</ul>
			
			</NAV>
	
			
			<section id="principal">
					<?php 
						include("$contenido");
					 ?>

			</section>
		</section>
		<CENTER>
			<h1>BIENVENIDO AL SISTEMA</h1>
		</CENTER>
		
</body>
</html>