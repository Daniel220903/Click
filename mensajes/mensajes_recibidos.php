<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: ../index.php");
}

include "../functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/filtros.css" rel="stylesheet" type="text/css" />
    <link href="../css/mensaje.css" rel="stylesheet" type="text/css" />
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/lateral.css">
    <link rel="stylesheet" href="../css/home2.css">
    <title>Bandeja de entrada - Click</title>
</head>

<body>


    <?php require("../conexion.php"); ?>
    <?php include "headermensaje.php";
    ?>
    <?php include "lateralheadermsj.php"; ?>

    <div class="cabecera-mensaje">
        <div class="left">
            <a href="enviar_msj.php" style="color: #fff;" class="escribir">Escribe un mensaje</a>
        </div>
        <div class="right">
            <a href="mensajes_borrados.php" style="color: #fff;" class="eliminados">Mensajes eliminados</a>
        </div>
    </div>


    <div class=" container">
        <table class="table">
            <caption>Bandeja de entrada</caption>
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th>Usuario</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <?php

            require("../conexion.php");

            $querymen = $mysqli->query("SELECT * FROM mensajes WHERE para = '" . $_SESSION['id'] . "' AND estado != 'eliminado' ORDER BY id_msj desc");
            while ($row = mysqli_fetch_array($querymen)) {

                $usuarion = $mysqli->query("SELECT * FROM users WHERE id = '" . $row['de'] . "'");
                $proveniente = mysqli_fetch_array($usuarion);


                if ($row['leido'] == 1) {
                    $leido = "<img src = '../images/unread.png'>";
                } else {
                    $leido = "<img src = '../images/read.png'>";
                }
            ?>
            <?php

                require "../conexion.php";

                $sqlM = $mysqli->query("SELECT * FROM users WHERE id = '" . $row['de'] . "'");
                $rowM = $sqlM->fetch_array();

                ?>
            <tbody>
                <tr>
                    <td data-label="Estado"><?php echo $leido; ?></td>
                    <td data-label="Foto"><img src="../<?php echo $rowM['avatar']; ?>" width="60"></td>
                    <td data-label="Usuario"><?php echo $proveniente['username']; ?></td>
                    <td data-label="Titulo"><a href="leer_mensajes.php?id=<?php echo $row['id_msj']; ?>">
                            <?php echo $row['titulo']; ?></a></td>
                    <td data-label="Fecha"><?php echo $row['fecha'] ?></td>
                    <td data-label="Eliminar"><a href="borrar_msj.php?id=<?php echo $row['id_msj']; ?>"><img
                                src="../images/delete.png" width="20"></a></td>

                </tr>
            </tbody>
            <?php   }    ?>
        </table>
    </div>

</body>

</html>