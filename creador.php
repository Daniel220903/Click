<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}

include "functions.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/lateral.css">
    <link rel="stylesheet" href="css/creador2.css">
    <link rel="stylesheet" href="css/tooltip1.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</head>

<body>
    <?php include "header.php";
    ?>
    <?php include "lateralheader.php";
    ?>

    <?php
    require "conexion.php";

    $sqlA = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'");
    $rowA = $sqlA->fetch_array();

    $sqlB = $mysqli->query("SELECT * FROM creadores WHERE id_creador = '" . $_SESSION['id'] . "'");
    $rowB = $sqlB->fetch_array();
    ?>




    <main class="contenedor-t-price">
        <p>
            <a class="tooltip">
                <i class="fas fa-info-circle"></i>
                <span class="tooltip-box">Precio Suscripcion:<br>
                    Asigna el precio de tu suscripcion mensual para desbloquear tu contenido exclusivo
                </span>
            </a>
        </p>
    </main>

    <div class="creator-price">
        <?php if ($rowA['id'] == $rowB['id_creador']) {
            $price = $mysqli->real_escape_string($_POST['price']); ?>

        <h2>Suscripcion</h2>

        <form action="" method="post">
            <div class="price">Costo de tu suscripcion</div>
            <div class="input-price"><input type="number" name="price"
                    value="<?php echo $rowB['precio_suscripcion']; ?>" autocomplete="off" min="0"></div>
            <div class="container">
                <div class="buttons">
                    <button class="btn btn-1" name="editar">Cambiar Precio</button>
                </div>
            </div>
        </form>

        <?php if (isset($_POST['editar'])) {
                require "conexion.php";
                $price = $mysqli->real_escape_string($_POST['price']);

                $sqlC = $mysqli->query("UPDATE creadores  SET  precio_suscripcion = '$price' WHERE id_creador = '" . $_SESSION['id'] . "'");

                if ($sqlC) {
            ?>
        <?php
                    Header("Refresh: 0; URL=creador.php");
                }
            }

            ?>


        <?php } else {
        ?>

        <h2>Dar de alta suscripciones</h2>

        <form action="" method="post">
            <div class="price">Establece el precio de tu suscripcion</div>
            <div class="input-price"><input type="number" name="price" value="" autocomplete="off" min="0"></div>
            <button value="asignar" name="asignar">Dar de alta</button>
        </form>
        <?php if (isset($_POST['asignar'])) {
                require "conexion.php";
                $price = $mysqli->real_escape_string($_POST['price']);

                $sqlE = $mysqli->query("INSERT INTO creadores (id_creador,precio_suscripcion,fecha_alta) 
                VALUES ('" . $rowA['id'] . "','$price',now())");

                $sqlZ = $mysqli->query("INSERT INTO pago (user_creador,creador,user_pagador,pagador) 
                VALUES ('" . $rowA['username'] . "','" . $rowA['id'] . "','" . $rowA['username'] . "','" . $rowA['id'] . "')");


                if ($sqlE) {
            ?>
        <div class="advise">
            <p>Felicidades, haz realizado correctamente el registro, ya puedes vender tu contenido</p>
        </div>
        <?php
                    Header("Refresh: 1; URL=home.php");
                }
            }

            ?>
        <?php } ?>
    </div>

    <main class="contenedor-t-info">
        <p>
            <a class="tooltip">
                <i class="fas fa-info-circle"></i>
                <span class="tooltip-box">Descripcion de creador:<br>
                    Escribe una breve reseña de que tipo de contenido subes, que categorias abarcas, que tipo de
                    contenido subiras
                    y cualquier otra cosa que se te pueda ocurrir para hacer una buena presenacion a los usuarios que
                    esten interesados en
                    pagar una suscripcion
                </span>
            </a>
        </p>
    </main>

    <div class="creator-info">
        <h2>Descripcion</h2>
        <div class="price">Escribe una breve descripcion sobre el tipo de contenido que subes </div>
        <form action="" method="post">

            <textarea rows="6" name="descripcion_creador"
                placeholder="Actualiza tu descripcion como usuario"></textarea>
            <?php
            require "conexion.php";
            $descripcion = $mysqli->real_escape_string($_POST['descripcion_creador']);

            if (isset($_POST['editar-desc'])) {

                $queryI = $mysqli->query("UPDATE creadores SET descripcion_creador = '$descripcion'  WHERE id_creador = '" . $_SESSION['id'] . "'");

                $sqlI = $mysqli->query("SELECT * FROM creadores WHERE id_creador = '" . $_SESSION['id'] . "' ");
                $rowI = $sqlI->fetch_array();
                if ($queryI) {
                    header("refresh: 0; url = home.php");
                }
            }
            ?>
            <div class="container">
                <div class="buttons">
                    <button class="btn btn-1" name="editar-desc">Guardar descripcion</button>
                </div>
            </div>
        </form>
    </div>

    <main class="contenedor-t-types">
        <p>
            <a class="tooltip">
                <i class="fas fa-info-circle"></i>
                <span class="tooltip-box">Reglas y terminos de creador:<br>
                    Tienes que leer todos los terminos y condiciones como creador una vez aceptados entraras en nuestro
                    algoritmo
                    de recomendacion de creadores:
                </span>
            </a>
        </p>
    </main>

    <div class="creator-types">
        <h2>Reglas</h2>
        <div class="price">Terminos y Condiciones de Click:</div>
        <form action="" method="post">
            <ul>
                <li>Regla 1</li>
                <li>Regla 2</li>
                <li>Regla 3</li>
                <li>Regla 4</li>
                <li>Regla 5</li>
                <li>Regla 6</li>
                <li><a href="reglas.php">Todas las reglas</a></li>
            </ul>
            <?php if (isset($_POST['aceptar'])) {
                $queryA = $mysqli->query("UPDATE creadores SET terminos = 1  WHERE id_creador = '" . $_SESSION['id'] . "'");
                if ($queryI) {
                    header("refresh: 0; url = home.php");
                }
            }  ?>

            <?php
            $sqlBut = $mysqli->query("SELECT * FROM creadores WHERE id_creador = '" . $_SESSION['id'] . "' ");
            $rowbut = $sqlBut->fetch_array();

            if ($rowbut['terminos'] == 0) {
            ?>
            <div class="container">
                <div class="buttons">
                    <button class="btn btn-1" name="aceptar">Acepto terminos y condiciones</button>
                </div>
            </div>
            <?php } else { ?>
            <div class="container">
                <i class="bx bx-mouse-alt"></i>

                Terminos y Condiciones Aceptados
            </div>
            <?php } ?>

        </form>
    </div>


    <div class="separador">

    </div>



    <!-- Aqui empieza el diseño -->

    <style>
    .container i {
        font-size: 50px;
    }

    .separador {
        position: absolute;
        width: 30%;
        top: 150%;
        left: 12%;
        background-color: transparent;
        border-radius: 13px;
        padding: 10px;
        text-align: center;
    }

    .creator-types form ul li {
        text-align: left;
        margin-left: 30px;
        padding: 4px;
    }

    .contenedor-t-info {
        margin-top: 0px !important;
        width: 90%;
        max-width: 1000px;
        padding: 60px auto;
        width: 10%;
        margin-left: 36%;
        display: inline-block;
    }

    .contenedor-t-types {
        margin-top: 240px !important;
        width: 90%;
        max-width: 1000px;
        padding: 60px auto;
        width: 10%;
        margin-left: 20%;
        display: inline-block;
    }

    .contenedor-t-price {
        margin-top: 0px !important;
        width: 90%;
        max-width: 1000px;
        padding: 60px auto;
        width: 10%;
        margin-left: 20%;
        display: inline-block;
    }


    .tooltip {
        left: 48%;
        font-weight: 100;
        color: #3c48e5;
        text-decoration: none;
        position: relative;
        font-size: 42px;
        cursor: pointer;
    }

    .tooltip:hover {
        text-decoration: underline;
    }

    .tooltip:hover .tooltip-box {
        display: inline-block;
    }

    .tooltip-box {
        display: none;
        position: absolute;
        background: #000;
        line-height: 20px;
        z-index: 500;
        text-align: center;
        color: #fff;
        font-size: 14px;
        padding: 5px 10px;
        border-radius: 5px;
        left: 0;
        right: -577%;
        top: 55px;
        width: 200px;
        margin: auto;
        left: -580%;
    }

    .tooltip-box::after {
        content: "";
        display: block;
        border-bottom: 7px solid #000;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        position: absolute;
        top: -7px;
        left: calc(50% - 7px);
    }
    </style>
</body>

</html>