<!DOCTYPE html>
<html lang="es">

<head>
    <title>Nueva Contrasena - Click</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="css/olvidar_password2.css" type="text/css">
</head>

<body>

    <?php
  if (isset($_GET['user']) and isset($_GET['token'])) {

    require "conexion.php";

    $user = $mysqli->real_escape_string($_GET['user']);
    $token = $mysqli->real_escape_string($_GET['token']);

    $sql = $mysqli->query("SELECT token FROM users WHERE username = '$user'");
    $row = $sql->fetch_array();

    if ($row['token'] ==  $token) {
         
         
        }
        
  ?>

    <div class="contendedor-inicial">

        <div class="imagenes">
            <img src="images/passwprd1.png" />

        </div>
        <div class="contenedor-info">
            <div class="contenedor-img">
                <img src="images/beta-logo.png" alt="" srcset="">
            </div>
            <div class="info-text">
                <p>Ingresa tu Password</p>
                <form class="form" action="" method="post">

                    <input type="text" class="input" name="contrasena" autocomplete="off" required />
                    <label for="label-email" class="label-email">
                        <span class="text-email">Ingresa tu Nueva Password</span>
                    </label>

                    <button class="btn-eviar" name="codigo"><span>Ingresar</span></button>
                </form>
                 <?php
        if (isset($_POST['codigo'])) {
          require "conexion.php";

          $contrasena = $mysqli->real_escape_string($_POST['contrasena']);
          $contrasena = md5($contrasena);

          $act = $mysqli->query("UPDATE users SET password = '$contrasena', token = '' WHERE username = '$user'");
           if ($act) {
            echo "Su password ha cambiado, ya puede ingresar";
            Header("Refresh: 0; URL=index.php");
          }
          } ?>

            </div>
        </div>

    </div>



</body>
<?php 
  } ?>

</html>