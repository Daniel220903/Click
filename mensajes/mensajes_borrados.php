<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}
require "../conexion.php";
include "../functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home2.css">
    <link href="../css/filtros.css" rel="stylesheet" type="text/css" />
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/lateral.css">
    <title>Document</title>
    <link href="../css/mensajes.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <?php
    require("../conexion.php");
    ?>

    <?php include "headermensaje.php"; ?>
    <?php include "lateralheadermsj.php"; ?>

    <div class="cabecera-mensaje">
        <div class="medio">
            <a href="mensajes_recibidos.php" style="color: #fff;" class="bandeja">Regresar a la bandeja</a>
        </div>
    </div>

    <br><br><br>
    <div class="container">
        <table class="table">
            <caption>Bandeja de eliminados</caption>
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th>Usuario</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Reestablecer</th>
                </tr>
            </thead>
            <?php

            require("../conexion.php");

            $querymen = $mysqli->query("SELECT * FROM mensajes WHERE para = '" . $_SESSION['id'] . "' AND estado != 'normal' ORDER BY id_msj desc");
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
                    <td data-label="Consola"><?php echo $leido; ?></td>
                    <td data-label="Precio"><img src="../<?php echo $rowM['avatar']; ?>" width="60"></td>
                    <td data-label="Ventas"><?php echo $proveniente['username']; ?></td>
                    <td data-label="Fecha de lanzamiento"><a href="leer_mensajes.php?id=<?php echo $row['id_msj']; ?>">
                            <?php echo $row['titulo']; ?></a></td>
                    <td data-label="Consola"><?php echo $row['fecha'] ?></td>
                    <td data-label="Consola"> <a href="restaurar_msj.php?id=<?php echo $row['id_msj']; ?>"><img
                                src="../images/restaurar.png" width="60"></a></td>

                </tr>
            </tbody>
            <?php   }    ?>
        </table>
    </div>

</body>

</html>