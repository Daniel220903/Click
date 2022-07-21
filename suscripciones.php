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
    <title>Tus Suscripciones - Click</title>
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

    <?php
    require "conexion.php";

    $sqlA = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION["id"] . "'");
    $rowA = $sqlA->fetch_array();



    $sqlCon = $mysqli->query("SELECT * FROM creadores WHERE id_creador = '" . $rowA['id'] . "' ");
    $rowCon = $sqlCon->fetch_array();
    ?>

    <div class="container-suscriptions">
        <table class="suscriptions">
            <caption>Suscripciones</caption>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Usuario</th>
                    <th>Fecha</th>
                    <th>Costo</th>
                </tr>
            </thead>
            <?php
            $sqlB = $mysqli->query("SELECT * FROM pago WHERE pagador = '" . $rowA['id'] . "'");
            while ($rowB = $sqlB->fetch_array()) {
                $sqlC = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowB['creador'] . "'");
                $rowC = $sqlC->fetch_array();
            ?>
            <tbody>
                <tr>
                    <td data-label="Foto"><img src="<?php echo $rowC['avatar']; ?>" width="60"></td>
                    <td data-label="Usuario"><?php echo $rowC['username']; ?></td>
                    <td data-label="Fecha"><?php echo $rowB['fecha_pago'] ?></td>
                    <td data-label="Costo"><?php echo $rowB['precio'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
    
    <style>
    .container-suscriptions {
        width: 80%;
        max-width: 1000px;
        margin: auto;
        margin-bottom: 75px;
    }

    .suscriptions {
        width: 100%;
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        table-layout: fixed;
    }

    .suscriptions caption {
        font-size: 28px;
        text-transform: uppercase;
        font-weight: bold;
        margin: 8px 0px;
    }

    .suscriptions tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
    }

    .suscriptions th,
    .suscriptions td {
        font-size: 16px;
        padding: 8px;
        text-align: center;
    }

    .suscriptions thead th {
        text-transform: uppercase;
        background-color: #ddd;
    }

    .suscriptions tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.2);
    }

    .suscriptions tbody td:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }

    @media screen and (max-width: 1190px) {
        .suscriptions {
            border: 0px;
            width: 80%;
            margin-left: 100px;
        }
    }

    @media screen and (max-width: 600px) {
        .suscriptions {
            border: 0px;
            width: 80%;
            margin-left: 100px;
        }

        .suscriptions caption {
            font-size: 22px;
        }

        .suscriptions thead {
            display: none;
        }

        .suscriptions tr {
            margin-bottom: 8px;
            border-bottom: 14px solid #ddd;
            display: block;
        }

        .suscriptions th,
        .suscriptions td {
            font-size: 12px;
        }

        .suscriptions td {
            display: block;
            border-bottom: 1px solid #ddd;
            text-align: right;
        }

        .suscriptions td:last-child {
            border-bottom: 0px;
        }

        .suscriptions td::before {
            content: attr(data-label);
            font-weight: bold;
            text-transform: uppercase;
            float: left;
        }
    }
    </style>

</body>


</html>