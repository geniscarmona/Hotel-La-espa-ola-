<?php 
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) && 
			isset($_POST['comment']) && !empty($_POST['comment']) &&
			isset($_POST['submit']))
			 { 
				$conexion = mysqli_connect('localhost','root', '', 'tutorialphp') or die("ERROR");    
				

				mysqli_query($conexion, "INSERT INTO opinionhotel (nombre, Comentario, Valoracion) VALUES ('{$_POST['nombre']}', '{$_POST['comment']}','{$_POST['estrellas']}')");

				header('Location: Opinión.php');
			} else { 
				echo "error de registro";
				
			}
?>
