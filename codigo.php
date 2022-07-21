<?php
ob_start();
//Esto podria ser el problema ya que es para activar el almacenamiento en el buffer
?>
<?php
session_start();
/*crea una sesión o reanuda la actual basada en un identificador 
de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.
Este podria ser uno de los problemas que tenemos de regsitro*/

if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Codigo de Recuperacion - Click</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <?php include "header.php"; ?>

    <div id="wrapper">

        <?php
    if (isset($_POST['codigo'])) {

      require("conexion.php");

      $code = $mysqli->real_escape_string($_POST['code']);

      $consultausuario = "SELECT code FROM users WHERE username = '" . $_SESSION['username'] . "'";
      $resultadousuario = $mysqli->query($consultausuario);
      $row = $resultadousuario->fetch_array();

      if ($row['code'] == $code) {

        Header("Refresh: 4; URL=home.php");
        echo "Gracias por confirmar tu Email";

        $sql = $mysqli->query("UPDATE users SET confirmed = '1' WHERE username = '" . $_SESSION['username'] . "'");
      } else {

        echo "Codigo Incorrecto";
      }

      $mysqli->close();
    }
    ?>

        <div class="main-content">
            <div class="header">
                <img src="images/logoo.png" />
            </div>
            <form action="" method="post">
                <div class="l-part">
                    <input type="text" placeholder="Codigo de seguridad" class="input" name="code" required />
                    <input type="submit" value="Confirma tu Email" class="btn" name="codigo" />
                </div>
            </form>
        </div>

    </div>

</body>

</html>
<?php
ob_end_flush();
?>