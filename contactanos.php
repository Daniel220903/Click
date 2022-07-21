<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}

include "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Click</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" type="text/css" href="css/contactanos2.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/9f4ca44b10.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	
</head>

<body>

    <?php 
     if (isset($_POST['mandar'])) {
     require("conexion.php");
         
          $asunto = $mysqli->real_escape_string($_POST['asunto']);
          $email = $mysqli->real_escape_string($_POST['user']);
          $mensaje = $mysqli->real_escape_string($_POST['mensaje']);
          $telefono = $mysqli->real_escape_string($_POST['telefono']);
          
          $email_to = "contaclicksocial@gmail.com";
          $email_subject = $asunto;
          $email_from = $email;
          $email_message = "Mensaje:\n".$mensaje."\n\nTelefono:\n".$telefono."\n\n";
          
$headers = 'From: ' . $email_from . "\r\n" .'Reply-To: ' . $email_from . "\r\n" .'X-Mailer: PHP/' . phpversion();
            @mail( $email_to, $email_subject, $email_message, $headers);
     }
    ?>
	<div class="contenedor">
		<h1 class="logo"></h1>

		<div class="contenido"> 
			<div class="contenido-formulario">
			    <a href="configuracion.php"><i class="fa-solid fa-arrow-left"></i></a>
				<h3>Contactanos</h3>
				<form action="" method="post">
					<p>
						<label>Nombre</label>
						<input type="text" name="nombre" required>
					</p>
					<p>
						<label>Nombre de usuario</label>
						<input type="text" name="user" required>
					</p>
					<p>
						<label>Telefono(opcional)</label>
						<input type="tel" name="telefono" >
					</p>
					<p>
						<label>Asunto</label>
						<input type="text" name="asunto" required>
					</p>
					<p>
						<label>Mensaje</label>
						<input type="text" name="mensaje" required>
					</p>
					<p class="bloqueo">
						<button type="submit" name="mandar">
							Enviar
						</button>
					</p>
				</form>
			</div>

			<div class="contenido-info">
				<h4>Mas informacion</h4>
				<ul>
					<li><i class="fa-solid fa-location-dot"></i>Av Vallarta 762</li>
					<li><i class="fa-solid fa-phone"></i>33 2367 9515</li>
					<li><i class="fa-solid fa-at"></i>Click_info@gmail.com</li>
				</ul>
				<p>Cuentanos tu experiencia en Click! Estamos abiertos a comentarios, dudas, quejas, sugerencias.
					<br> Se te respondera a tu correo electronico en un lapso de 1 a 2 dias.
					<br> Gracias por ser parte de esta comunidad!
				</p>
				<p>clicksocial.online</p>
			</div>
		</div>
	</div>
</body>
</html>