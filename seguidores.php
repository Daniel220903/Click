<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}

include "functions.php";
?>

<?php
require "conexion.php";
$sqlA = $mysqli->query("SELECT private_profile FROM users WHERE id ='" . $_SESSION['id'] . "'");
$rowA = $sqlA->fetch_array();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Seguidores - Click</title>
    <meta charset="UTF-8">
    <meta name="title" content="Click">
    <meta name="description" content="Click">
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <link href="css/mensaje.css" rel="stylesheet" type="text/css" />
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include "header.php"; ?>
    <?php include "lateralheader.php"; ?>
    <div class=" container">
        <table class="table">
            <caption>Seguidores</caption>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Foto</th>

                </tr>
            </thead>
            <?php

            if (isset($_GET['username'])) {
                require "conexion.php";
                $sqlA = $mysqli->query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
                $rowA = $sqlA->fetch_array();

                $sqlB = $mysqli->query("SELECT * FROM seguidores WHERE user_seguido = '" . $_GET['username'] . "'");
                while ($rowB = $sqlB->fetch_array()) {

                    $sqlC = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowB['seguidor'] . "' ");
                    $rowC = $sqlC->fetch_array();

            ?>

            <tbody>
                <tr>
                    <td data-label="Usuario"><?php echo $rowB['user_seguidor']; ?></td>
                    <td data-label="Nombre"><?php echo $rowC['name']; ?></td>
                    <td data-label="Foto"><img src="<?php echo $rowC['avatar']; ?>" width="60"></td>
                </tr>
            </tbody>


            <?php }
            } ?>

        </table>
    </div>
</body>

</html>