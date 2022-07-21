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
    <title>Editar Contraseña - Click</title>
    <meta charset="UTF-8">
    <meta name="title" content="Click">
    <meta name="description" content="Click">
    <link rel="stylesheet" href="css/lateral.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <link rel="stylesheet" href="css/home2.css">

</head>

<body>

    <?php include "header.php"; ?>
    <?php include "lateralheader.php"; ?>

    <div class="box">
        <form method="post">
            <?php

            if (isset($_POST['editar'])) {
                require "conexion.php";

                $passActual = $mysqli->real_escape_string($_POST['passActual']);
                $pass1 = $mysqli->real_escape_string($_POST['pass1']);
                $pass2 = $mysqli->real_escape_string($_POST['pass2']);

                $passActual = md5($passActual);
                $pass1 = md5($pass1);
                $pass2 = md5($pass2);

                $sqlA = $mysqli->query("SELECT password FROM users WHERE id = '" . $_SESSION['id'] . "'");
                $rowA = $sqlA->fetch_array();

                if ($rowA['password'] == $passActual) {

                    if ($pass1 == $pass2) {

                        $update = $mysqli->query("UPDATE users SET password = '$pass1' WHERE id = '" . $_SESSION['id'] . "'");
                        if ($update) {
            ?>
            <p style="color:white"> <?php echo "se ha actualizado tu contraseña"; ?> </p><?php
                                                                                                        }
                                                                                                    } else { ?>
            <p style="color:white"> <?php echo "Las dos contraseñas no coinciden"; ?></p><?php
                                                                                                    }
                                                                                                } else { ?>
            <p style="color:white"> <?php echo "Tu contraseña actual no coincide"; ?></p><?php
                                                                                                }
                                                                                            }

                                                                                                    ?>
            <div class="form" id="sarch-box">
                <input type="password" name="passActual" placeholder="." class="form__input" autocomplete="off">
                <label for="email" class="form__label">Contraseña Actual</label>
            </div>

            <div class="form" id="sarch-box">
                <input type="password" name="pass1" placeholder="." class="form__input" autocomplete="off">
                <label for="email" class="form__label">Contraseña nueva</label>
            </div>
            <div class="form" id="sarch-box">
                <input type="password" name="pass2" placeholder="." class="form__input" autocomplete="off">
                <label for="email" class="form__label">Escribe otra vez tu contraseña</label>
            </div>

            <div style="color:red; font-size: 12px;"><?php if (isset($existe)) {
                                                            echo $existe;
                                                        } ?></div>

            <button name="editar" class="btn btn--2" id="inptsearch">
                Cambiar contraseña
            </button>
        </form>
    </div>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');

    * {
        padding: 0;
        margin: 0;
    }

    .medio {
        padding: 0;
        height: 60px;
        left: 50%;
        width: 100%;
        position: absolute;
    }

    .medio:hover {
        border-radius: 25px 25px 25px 25px;
        background-color: #674baf;
        width: 100%;
        position: absolute;
        transition: 1.5s all;
    }

    .bandeja {
        text-decoration: none;
        align-items: center;
        display: flex;
        height: 100px;
        justify-content: center;
        padding-bottom: 3rem;
    }

    .cabecera-mensaje {
        color: white;
        position: relative;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 10px;
        margin-bottom: 30px;
        width: 80%;
        height: 60px;
        border-radius: 25px 25px 25px 25px;
        background-color: #060b23;
    }

    @media screen and (max-width: 800px) {
        .cabecera-mensaje {
            color: white;
            position: relative;
            margin-left: 22%;
            margin-right: 10%;
            margin-top: 10px;
            margin-bottom: 30px;
            width: 70%;
            height: 60px;
            border-radius: 25px 25px 25px 25px;
            background-color: #060b23;
        }
    }

    @media screen and (max-width: 550px) {
        .cabecera-mensaje {
            color: white;
            position: relative;
            margin-left: 24%;
            margin-right: 10%;
            margin-top: 10px;
            margin-bottom: 30px;
            font-size: 12px;
            width: 70%;
            height: 50px;
            border-radius: 25px 25px 25px 25px;
            background-color: #060b23;
        }
    }

    @media screen and (max-width: 480px) {
        .cabecera-mensaje {
            color: white;
            position: relative;
            margin-left: 25%;
            margin-right: 10%;
            margin-top: 10px;
            margin-bottom: 30px;
            font-size: 12px;
            width: 70%;
            height: 50px;
            border-radius: 25px 25px 25px 25px;
            background-color: #060b23;
        }
    }

    @media screen and (max-width: 425px) {
        .cabecera-mensaje {
            color: white;
            position: relative;
            margin-left: 28%;
            margin-right: 10%;
            margin-top: 10px;
            margin-bottom: 30px;
            font-size: 12px;
            width: 70%;
            height: 50px;
            border-radius: 25px 25px 25px 25px;
            background-color: #060b23;
        }
    }

    @media screen and (max-width: 360px) {
        .cabecera-mensaje {
            color: white;
            position: relative;
            margin-left: 32%;
            margin-right: 10%;
            margin-top: 10px;
            margin-bottom: 30px;
            font-size: 9px;
            width: 70%;
            height: 50px;
            border-radius: 25px 25px 25px 25px;
            background-color: #060b23;
        }
    }

    @media screen and (max-width: 360px) {
        .cabecera-mensaje {
            color: white;
            position: relative;
            margin-left: 35%;
            margin-right: 10%;
            margin-top: 10px;
            margin-bottom: 30px;
            font-size: 9px;
            width: 70%;
            height: 50px;
            border-radius: 25px 25px 25px 25px;
            background-color: #060b23;
        }
    }

    .left:hover {
        border-radius: 25px 0 0 25px;
        background-color: #674baf;
        left: 0;
        width: 50%;
        position: absolute;
        transition: 1.5s all;
    }

    .left {
        padding: 0;
        height: 60px;
        left: 0;
        width: 50%;
        position: absolute;
    }

    .escribir {
        text-decoration: none;
        align-items: center;
        display: flex;
        height: 100px;
        justify-content: center;
        color: #333;
        padding-bottom: 3rem;
    }

    .right:hover {
        border-radius: 0 25px 25px 0;
        background-color: #674baf;
        right: 0;
        width: 50%;
        position: absolute;
        transition: 1.5s all;
    }

    .right {
        height: 60px;
        right: 0;
        position: absolute;
        width: 50%;
    }

    .eliminados {
        text-decoration: none;
        align-items: center;
        display: flex;
        height: 100px;
        justify-content: center;
        color: #333;
        padding-bottom: 3rem;
    }

    .container {
        width: 100%;
        max-width: 1000px;
        margin: auto;
        margin-bottom: 75px;
    }

    .table {
        width: 100%;
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        table-layout: fixed;
    }

    .table caption {
        font-size: 28px;
        text-transform: uppercase;
        font-weight: bold;
        margin: 8px 0px;
    }

    .table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
    }

    .table th,
    .table td {
        font-size: 16px;
        padding: 8px;
        text-align: center;
    }

    .table thead th {
        text-transform: uppercase;
        background-color: #ddd;
    }

    .table tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.2);
    }

    .table tbody td:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }

    @media screen and (max-width: 1190px) {
        .table {
            border: 0px;
            width: 80%;
            margin-left: 100px;
        }
    }

    @media screen and (max-width: 600px) {
        .table {
            border: 0px;
            width: 80%;
            margin-left: 100px;
        }

        .table caption {
            font-size: 22px;
        }

        .table thead {
            display: none;
        }

        .table tr {
            margin-bottom: 8px;
            border-bottom: 14px solid #ddd;
            display: block;
        }

        .table th,
        .table td {
            font-size: 12px;
        }

        .table td {
            display: block;
            border-bottom: 1px solid #ddd;
            text-align: right;
        }

        .table td:last-child {
            border-bottom: 0px;
        }

        .table td::before {
            content: attr(data-label);
            font-weight: bold;
            text-transform: uppercase;
            float: left;
        }
    }


    /*Diseño del input de buscar*/

    .form {
        position: relative;
        width: 20rem;
        height: 3rem;
        left: 35%;
        right: 40%;
        top: 8px;
        margin-bottom: 10px;
    }

    input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #e1e5ee;
        border-radius: 0.5rem;
        font-family: inherit;
        font-size: inherit;
        color: white;
        outline: none;
        padding: 1.25rem;
        background: none;
    }

    input:hover {
        border-color: #7AF065;
    }


    /* Change border when input focus*/

    input:focus {
        border-color: #18ffff;
    }

    label {
        position: absolute;
        left: 1rem;
        top: 0.8rem;
        padding: 0 0.5rem;
        color: white;
        cursor: text;
        transition: top 200ms ease-in, left 200ms ease-in, font-size 200ms ease-in;
        background-color: #060b23;
    }


    /* 
    1. When the input is in the focus state
    reduce the size of the label and move upwards 
    
    2. Keep label state when content is in input field 
    */

    .form__input:focus~.form__label,
    .form__input:not(:placeholder-shown).form__input:not(:focus)~.form__label {
        top: -0.5rem;
        font-size: 0.8rem;
        left: 0.8rem;
    }

    .box {
        position: relative;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 20px;
        margin-bottom: 30px;
        width: 80%;
        height: 550px;
        border-radius: 25px 25px 25px 25px;
        border: 3px solid black;
        padding-left: 10px;
        padding-bottom: 0;
        background-color: #060b23;
    }

    textarea {
        margin-top: 1rem;
        position: absolute;
        left: 10%;
        right: 10%;
        height: 50%;
        margin-bottom: 2rem;
        background: none;
        border: 2px solid #e1e5ee;
        border-radius: 0.5rem;
        color: white;
        outline: none;
        padding: 1rem;
        font-size: 1.3rem;
    }

    textarea:hover {
        border-color: #7AF065;
    }

    textarea:focus {
        border-color: #18ffff;
    }


    /*DISEÑO DEL BOTON DE ENVIAR BUSQUEDA*/

    .btn {
        position: relative;
        display: inline;
        left: 38%;
        right: 40%;
        height: 40px;
        width: 250px;
        border-radius: 4px;
        text-transform: uppercase;
        background-color: #000;
        color: #fff;
        padding: 0;
        font-size: 1.3rem;
        overflow: hidden;
        transition: all 500ms ease;
        border: 2px solid #0000;
        bottom: -2rem;
        z-index: 0;
        font-weight: 10;
        cursor: pointer;
        font-family: 'Inter', sans-serif;
    }

    .btn::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        margin: auto;
        background-color: #9A2119;
        transition: all 500ms ease;
        z-index: -1;
    }

    .btn--2:hover {
        background-color: #9A2119;
        box-shadow: 0 0 10px #20e2d7, 0 0 20px #20e2d7, 0 0 20px #20e2d7;
        color: #fff;
    }

    @keyframes shadow-pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(32, 226, 215, 0.6);
        }

        100% {
            box-shadow: 0 0 8px 16px rgba(32, 226, 215, 0);
        }
    }
    </style>

</body>

</html>