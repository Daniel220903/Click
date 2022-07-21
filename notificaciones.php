<?php
ob_start();
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}
include "functions.php";
error_log(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificaciones - Click</title>
    <meta name="description" content="Click">
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
</head>

<body>

    <?php include "header.php";
    ?>
    <?php include "lateralheader.php";
    ?>



    <div class="noti-msj">
        <table class="table-msj">
            <caption>Mensajes Recientes</caption>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Usuario</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Mensaje</th>
                </tr>
            </thead>


            <?php require "conexion.php";

            $sqlA = $mysqli->query("SELECT * FROM mensajes WHERE para = '" . $_SESSION['id'] . "' AND leido = 1 AND estado != 'eliminado' ORDER BY id_msj desc");
            while ($rowA = $sqlA->fetch_array()) {
                $sqlB = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowA['de'] . "'");
                $rowB = $sqlB->fetch_array();

            ?>
            <tbody>
                <tr>
                    <td data-label="Foto"><img src="<?php echo $rowB['avatar']; ?>" width="60"></td>
                    <td data-label="Usuario"><?php echo $rowB['username']; ?></td>
                    <td data-label="Titulo"><a href="mensajes/leer_mensajes.php?id=<?php echo $rowA['id_msj']; ?>">
                            <?php echo $rowA['titulo']; ?></a></td>
                    <td data-label="Fecha"><?php echo $rowA['fecha'] ?></td>
                    <td data-label="Mensaje"><?php echo $rowA['mensaje'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>


    </div>
    <!-- -----------------------------------------------  -->

    <div class="noti-msj">
        <table class="table-msj">
            <caption>Seguidores Recientes</caption>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Usuario</th>
                    <th>Fecha</th>
                </tr>
            </thead>

            <?php
            require "conexion.php";

            $sqlZ = $mysqli->query("SELECT * FROM seguidores WHERE seguido = '" . $_SESSION["id"] . "' order by id desc
        limit 5");
            while ($rowZ = $sqlZ->fetch_array()) {
                $sqly = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowZ['seguidor'] . "' ");
                $rowy = $sqly->fetch_array();

            ?>

            <tbody>
                <tr>
                    <td data-label="Foto"><img src="<?php echo $rowy['avatar']; ?>" width="60"></td>
                    <td data-label="Usuario"><?php echo $rowy['username']; ?></td>
                    <td data-label="Fecha"><?php echo $rowZ['fecha'] ?></td>
                    <br>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>

    <style>
    .noti-msj {
        width: 80%;
        max-width: 1000px;
        margin: auto;
        margin-bottom: 75px;
    }

    .table-msj {
        width: 100%;
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        table-layout: fixed;
    }

    .table-msj caption {
        font-size: 28px;
        text-transform: uppercase;
        font-weight: bold;
        margin: 8px 0px;
    }

    .table-msj tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
    }

    .table-msj th,
    .table-msj td {
        font-size: 16px;
        padding: 8px;
        text-align: center;
    }

    .table-msj thead th {
        text-transform: uppercase;
        background-color: #ddd;
    }

    .table-msj tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.2);
    }

    .table-msj tbody td:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }

    @media screen and (max-width: 1190px) {
        .table-msj {
            border: 0px;
            width: 80%;
            margin-left: 100px;
        }
    }

    @media screen and (max-width: 600px) {
        .table-msj {
            border: 0px;
            width: 80%;
            margin-left: 100px;
        }

        .table-msj caption {
            font-size: 22px;
        }

        .table-msj thead {
            display: none;
        }

        .table-msj tr {
            margin-bottom: 8px;
            border-bottom: 14px solid #ddd;
            display: block;
        }

        .table-msj th,
        .table-msj td {
            font-size: 12px;
        }

        .table-msj td {
            display: block;
            border-bottom: 1px solid #ddd;
            text-align: right;
        }

        .table-msj td:last-child {
            border-bottom: 0px;
        }

        .table-msj td::before {
            content: attr(data-label);
            font-weight: bold;
            text-transform: uppercase;
            float: left;
        }
    }
    </style>



</body>

</html>