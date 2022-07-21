<!DOCTYPE html>
<html lang="es">

<head>
    <title>Olvidaste tu Contrasena - Click</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="css/olvidar_password2.css" type="text/css">
</head>

<body>


    <div id="wrapper">

        <?php
		if (isset($_POST['codigo'])) {
			require "conexion.php";

			$email = $mysqli->real_escape_string($_POST['email']);

			$sql = $mysqli->query("SELECT username,email FROM users WHERE email = '$email'");
			$row = $sql->fetch_array();
			$count = $sql->num_rows;

			if ($count == 1) {

				$token = uniqid();

				$act = $mysqli->query("UPDATE users SET token = '$token' WHERE email = '$email'");

				// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
				$email_to = $email;
				$email_subject = "Cambio de contrasena";
				$email_from = "noreply.clicksocial.online";

				$email_message = "Hola " . $row['username'] . ", haz solicitado cambiar tu contraseña, ingresa al siguiente link\n\n";
				$email_message .= "https://clicksocial.online/nuevacontrasena.php?user=" . $row['username'] . "&token=" . $token . "\n\n";


				// Ahora se envía el e-mail usando la función mail() de PHP
				$headers = 'From: ' . $email_from . "\r\n" .
					'Reply-To: ' . $email_from . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
				@mail($email_to, $email_subject, $email_message, $headers);

				echo "Te hemos enviado un email para cambiar tu contraseña" ;
			} else {

				echo "Este correo electrónico no esta registrado en nuestra base de datos";
			}
		}
		?>

        
               

        <div class="contendedor-inicial">
             <div class="imagenes">
                <img src="images/passwprd1.png" />
           
			 </div>
			<div class= "contenedor-info">
				<div class="contenedor-img">
					<img src="images/beta-logo.png" alt="" srcset="">
				</div>
				<div class= "info-text">
				  <p>Ingresa tu correo</p>
				 <form class ="form" action="" method="post">
                
				<input type="email" class="input" name="email" autocomplete="off" required />
				<label for="label-email" class="label-email"> 
				 	<span class="text-email">Ingresa tu email</span>
				 	 
				</label>
		   
                <button class="btn-eviar" name="codigo"><span>Ingresar</span></button>
			</form>
			
			
			

			</div>
              

		    

            
        </div>

    </div>

</body>

</html>