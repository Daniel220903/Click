<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}

error_reporting(0);
include "functions.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus likes - Click</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include "header.php";
    require "conexion.php";
    $sqlZ = $mysqli->query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
    $rowZ = $sqlZ->fetch_array();

    ?>


    <table>
        <tr>
            <td>publicacion</td>
            <td>Usuario</td>
            <td>fecha</td>
        </tr>
        <?php
        if (isset($_GET['username'])) {
            require "conexion.php";
            $sqlA = $mysqli->query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
            $rowA = $sqlA->fetch_array();

            $sqlB = $mysqli->query("SELECT * FROM likes WHERE usuario = '" . $rowZ['id'] . "'ORDER BY id desc");
            while ($rowB = $sqlB->fetch_array()) {

                $sqlC = $mysqli->query("SELECT * FROM publicaciones WHERE id = '" . $rowB['post'] . "' ");
                $rowC = $sqlC->fetch_array();

                $sqlD = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '" . $rowC['id'] . "' ");
                $rowD = $sqlD->fetch_array();

                $sqlE = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowC['user'] . "'");
                $rowE = $sqlE->fetch_array();

        ?>
        <tr>
            <td> <?php if ($rowD['type'] == 'imagen') { ?>
                <img src="archivos/<?php echo $rowD['ruta']; ?>" width="60">
                <?php }
                            if ($rowD['type'] == 'video') { ?>
                <video src="videoaudio/<?php echo $rowD['ruta']; ?>" width="20%" height="20%" controls></video>
                <?php }
                            if ($rowD['type'] == 'texto') { ?>
                <br>
                <p><?php echo $rowC['descripcion']  ?></p>
                <br>
                <?php } ?>
            </td>
            <td> <?php echo $rowE['username']; ?></td>
            <td> <?php echo $rowB['fecha']; ?> </td>
        </tr>


        <?php }
        } ?>

    </table>
</body>

</html>