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
    <title>Mensajes - Click</title>
    <link rel="stylesheet" href="../css/home2.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/lateral.css">

    <link href="../css/mensajes.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="../css/tooltip2.css" type="text/css">
</head>

<body>


    <?php

    require "../conexion.php";

    $sqlA = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'");
    $rowA = $sqlA->fetch_array();

    ?>

    <?php include "headermensaje.php";
    ?>
    <?php include "lateralheadermsj.php";
    ?>
<main class="contenedor-t">
        <p>
            <a class="tooltip">
                <i class="fas fa-info-circle"></i>
                <span class="tooltip-box">Mensajes: En "Para" va el nombre del usuario al cual deseas mandar el mensaje, acompañado de un asunto y el texto del mensaje.
                </span>
            </a>
        </p>
    </main>
    <div class="cabecera-mensaje">
        <div class="medio">
            <a href="mensajes_recibidos.php" style="color: #fff;" class="bandeja">Regresar a la bandeja</a>
        </div>
    </div>
    
    

    <div class="box">
        <form method="post">
            <div class="form" id="sarch-box">
                <input type="text" placeholder="." name="para" class="form__input" autocomplete="off">
                <label for="email" class="form__label">Para</label>
            </div>
            <div class="form" id="sarch-box">
                <input type="text" placeholder="." name="titulo" class="form__input" autocomplete="off">
                <label for="email" class="form__label">Asunto</label>
            </div>

            <label for="email" class="form__label"></label>
            <textarea name="mensaje" id="" cols="150" rows="20" placeholder="Mensaje"></textarea>

            <button name="guardar" class="btn btn--2" id="inptsearch">
                <i class='bx bx-send' type='solid'></i>
            </button>
        </form>
    </div>

    <?php

    if (isset($_POST['guardar'])) {

        $para = $_POST['para'];
        $titulo = $_POST['titulo'];
        $mensaje = $_POST['mensaje'];

        $querymen = $mysqli->query("SELECT * FROM users WHERE username = '$para'");
        $row = mysqli_fetch_array($querymen);
        $contar = mysqli_num_rows($querymen);

        if ($contar != 0) {

            $insertar = $mysqli->query("INSERT INTO mensajes (titulo,mensaje,de,para,fecha,leido,estado) 
            VALUES ('$titulo','$mensaje','" . $_SESSION['id'] . "','" . $row['id'] . "',now(),'1','normal')");

            if ($insertar) {
                echo "El mensaje se ha enviado correctamentne";
            } else {
                echo "Menseja no enviado, por favor envie de nuevo";
            }
        } else {
            echo ("El usuario ingresado no existe");
        }
    }

    ?>

</body>

</html>