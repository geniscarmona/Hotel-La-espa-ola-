<!DOCTYPE HTML> 
<html lang="es">
	<head>
		<title>Hotel Viva España</title> 
		<meta charset="UTF-8">
		<meta name="author" content="Uvuvwevwevwe Onyetenyevwe Ugwemuhwem Osas">
		<link rel="stylesheet" type="text/css" href="index.css"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
		<script src="index.js"></script> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

	</head>  
	<body> 
		<style type="text/css">
			body { 
				background-image: url(https://wallpaperscraft.com/image/burj_al_arab_hotel_dubai_uae_sky_sea_59061_1920x1080.jpg);
			 } 
			 label{ color:grey;}
			 input[type = "radio"]{ display:none;} 
  			.estrella:hover{color:orange;} 
  			input[type = "radio"]:checked ~ label{color:orange;} 
  			.opina{background-color: white;} 
  			.estrella:hover,
			.estrella:hover ~ label {
  				color: orange;
			} 
			.estrella{
     			 direction: rtl;/* right to left */
      			unicode-bidi: bidi-override;/* bidi de bidireccional */
 			 }

			input[type="radio"]:checked ~ label {
 				 color: orange;
			}
  			input { 
  				padding: 0.3%;
  				margin-left: 1%;
  			 } 
  			textarea{ 
  				margin-left: 1%;
  			 } 
  			#opiniones { 
  				background-color: rgba(255,255,255,0.4);
  				margin: 1%; 
  				padding: 0.3%;
  			 } 
  			#opiniones h1,p{ 
  				padding: 0.3%;
  			 } 
  			#opina{ 
  				background-color: rgba(255,255,255,0.4);
  				margin: 1%; 
  				padding: 0.3%;
  			 }
  			div { 
  				font-family: 'Muli', sans-serif;
  			 } 
  			#opina h1{ 
  				color: white;
  			 }
  			#opiniones{ 
  				color: white;
  			 }
  			 input, textarea{ 
  			 	font-family: 'Muli', sans-serif;
  			  }
  			}
		</style>
				<div id="opina">
					<h1>Opina y valora nuestro Hotel</h1>
					<form class="clasificacion" method="post" action="op-envio.php">
	  					<input type="text" name="nombre" placeholder="nombre">
	   					 <input id="radio1" type="radio" name="estrellas" value="5"><!--
	   					 --><label class="estrella" for="radio1">★</label><!--
	    				--><input class="estrella" id="radio2" type="radio" name="estrellas" value="4"><!--
					    --><label class="estrella" for="radio2">★</label><!--
					    --><input class="estrella" id="radio3" type="radio" name="estrellas" value="3"><!--
					    --><label class="estrella" for="radio3">★</label><!--
					    --><input class="estrella" id="radio4" type="radio" name="estrellas" value="2"><!--
					    --><label class="estrella" for="radio4">★</label><!--
					    --><input class="estrella" id="radio5" type="radio" name="estrellas" value="1"><!--
					    --><label class="estrella" for="radio5">★</label><br> 
					    <textarea name="comment" rows="5" cols="40" placeholder="Deja aquí tu opinion"></textarea>
					    <input type="submit" name="submit" value="Comenta">
					</form>
				</div> 
				<div id="opiniones"> 
					<h1>Opiniones de nuestros usuarios</h1>
					<?php 
						$conexion = mysqli_connect('localhost', 'root', '', 'tutorialphp') or die ('error'); 
						$result = mysqli_query($conexion, 'SELECT id, nombre, Fecha, Valoracion, Comentario FROM opinionhotel ORDER BY id DESC'); 
						while ($row = mysqli_fetch_row($result)){ 
       					 print "<hr>";
       					 print "<p>" . $row[0] . " --- " . $row[1] . " --- <strong>Fecha:</strong> ". $row[2] . " --- <strong>Valoracion: </strong>" . $row[3] . "</p>";
       					 print "<p>" . $row[4] . "</p>";
						} 
					?>
				</div>
	</body>
</html>