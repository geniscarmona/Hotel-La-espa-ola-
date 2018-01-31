<!DOCTYPE html>
	<html>
	<head>
		<title>PRUEBA REGISTRO</title> 
		<meta charset="utf-8">
	</head>
	<body>
		<?php 
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) && 
			isset($_POST['fecha']) && !empty($_POST['fecha']) && 
			isset($_POST['Ciudad']) && !empty($_POST['Ciudad'])  && 
			isset($_POST['clase']) && !empty($_POST['clase']))
			 { 
				$conexion = mysqli_connect('localhost', 'root', '', 'tutorialphp') or die("ERROR");    
				

				mysqli_query($conexion, "INSERT INTO reservashotel (nombre, Ciudad, Fecha, Clase) VALUES ('$_POST[nombre]', '$_POST[Ciudad]','$_POST[fecha]','$_POST[clase]')");

				header('Location: index.html');
			} else { 
				echo "error de registro";
				
			}
		
	?>
	</body>
	</html>
