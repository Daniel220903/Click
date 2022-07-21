<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}

include "functions.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Configuracion - Click</title>
    <meta charset="UTF-8">
    <meta name="description" content="Click">
    <!-- -->
    <link rel="stylesheet" href="css/lateral.css">
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/likes.js"></script>
    <script src="js/favoritos.js"></script>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <script src="js/favoritos.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <link rel="stylesheet" href="css/home2.css">
</head>

<body>
    <?php include "header.php"; ?>
    <?php include "lateralheader.php"; ?>
    <?php require "conexion.php"; ?>


    <main>

        <div class="container__box">
            <a href="editar_pass.php">
                <div class="box">
                    <i class="lni lni-lock"></i>
                    <h5>Cambiar Contraseña</h5>
                    <h4>Cambiar Contraseña</h4>
                </div>
            </a>
            <a href="borrar_cuenta.php">
                <div class="box">
                    <i class="lni lni-sad"></i>
                    <h5>Borrar Cuenta</h5>
                    <h4>Borrar Cuenta</h4>
                </div>
            </a>
           
            <a href="contactanos.php">
                <div class="box">
                    <i class="lni lni-whatsapp"></i>
                    <h5>Contactanos</h5>
                    <h4>Contactanos</h4>
                </div>
            </a>
            <a href="nosotros-sesion.php">
                <div class="box">
                    <i class="lni lni-help"></i>
                    <h5>Sobre Nosotros</h5>
                    <h4>Sobre Nosotros</h4>
                </div>
            </a>
             <a href="reglas.php">
                <div class="box">
                    <i class="lni lni-ruler-alt"></i>
                    <h5>Reglas y terminos</h5>
                    <h4>Reglas y terminos</h4>
                </div>
            </a>
           
        </div>

    </main>

    <style>
    * {
        text-decoration: none;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: arial;
    }

    body {
        background: #f3f3f3;
    }

    main {
        margin-top: 100px;
        padding-bottom: 100px;
    }



    .container__box {
        max-width: 1100px;
        margin: auto;
        margin-top: 40px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .box {
        width: 218px;
        height: 200px;
        background: #fff;
        margin: 1px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        cursor: pointer;
        transition: all 300ms ease;
        position: relative;
    }

    .box:hover {
        transform: scale(1.1);
        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.5);
        background: #060b23;
        z-index: 1;
    }

    .box i {
        font-size: 60px;
        color: #674baf;
    }

    .box:hover i {
        color: #fff;
    }

    .box h5 {
        margin-top: 20px;
        text-transform: uppercase;
        font-size: 14px;
        color: #777777;
    }

    .box:hover h5 {
        color: #fff;
        opacity: 0;
    }

    .box h4 {
        text-transform: uppercase;
        font-size: 18px;
        color: #fff;
        position: absolute;
        bottom: 50px;
        filter: blur(5px);
        opacity: 1;
    }

    .box:hover h4 {
        font-size: 14px;
        opacity: 1;
        filter: blur(0px);
        color: #fff;
        transition: all 600ms ease;
    }
    </style>



</body>

</html>