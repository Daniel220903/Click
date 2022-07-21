<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}
error_reporting(0);
include "functions.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Editar Perfil - Click</title>
    <meta charset="UTF-8">
    <meta name="title" content="Click">
    <meta name="description" content="Click">
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <link rel="stylesheet" type="text/css" href="css/editarperfil.css">
</head>

<body>

    <?php

    require "conexion.php";

    $sqlA = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'");
    $rowA = $sqlA->fetch_array();

    ?>

    <?php include "header.php"; ?>
    <?php include "lateralheader.php"; ?>

    <div class="h-content">

        <div class="e-mid">

            <form action="" method="post">

                <?php
                if (isset($_POST['editar'])) {
                    require "conexion.php";

                    $nombre = $mysqli->real_escape_string($_POST['nombre']);
                    $username = $mysqli->real_escape_string($_POST['username']);
                    $bio = $mysqli->real_escape_string($_POST['bio']);
                    $email = $mysqli->real_escape_string($_POST['email']);
                    $birt = $mysqli->real_escape_string($_POST['birt']);
                    $ubicacion = $mysqli->real_escape_string($_POST['ubicacion']);
                    $genero = $mysqli->real_escape_string($_POST['sex']);
                    $ubicacion = $mysqli->real_escape_string($_POST['ubicacion']);

                    $sqlB = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND id != '" . $_SESSION['id'] . "'");
                    $totalusuarios = $sqlB->num_rows;

                    $sqlC = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND id != '" . $_SESSION['id'] . "'");
                    $totalemail = $sqlC->num_rows;

                    if ($totalusuarios > 0) {
                        $existe = "Ya hay un usuario con este nombre";
                    } elseif ($totalemail > 0) {
                        $existe2 = "Ya hay un email registrado";
                    } else {

                        $sqlE = $mysqli->query("UPDATE users SET name = '$nombre', username = '$username',ubicacion = '$ubicacion', birthday = '$birt', bio = '$bio', email = '$email' ,sex = '$genero' WHERE id = '" . $_SESSION['id'] . "'");

                        if ($sqlE) {
                            header('Location: editar_perfil.php');
                        }
                    }
                }
                ?>


                <div class="e-right">
                    <div id="e-banner" >
                    <img src="images/card-pattern.svg" class="back-image-profile">
                    </div>
                    <!--<div class= "btn-banner">
                    
                    <a href="#">Modificar banner </a>
                    </div>-->
                    <div class="e-contenido">
                        <div class="e-title" ><img src="<?php echo $rowA['avatar']; ?>" width="60"></div>
                        <div class="e-input"  id="username"><?php echo $rowA['username']; ?><br>
                            <a  id="foto-perfil"href="foto_perfil.php">Foto de perfil</a>
                        </div>
                        <div class="linea">
                        <hr>
                        <div>
                    </div>
                    <div class="e-contenido1">
                        <div class="e-titlee">Nombre</div>
                        <div class="e-input"><input type="text" name="nombre" value="<?php echo $rowA['name']; ?>"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="e-contenido1">
                        <div class="e-titlee">Nombre de usuario</div>
                        <div class="e-input"><input  type="text" name="username" value="<?php echo $rowA['username']; ?>"
                                autocomplete="off" readonly>
                            <br>
                            <div style="color:red; font-size: 12px;"><?php if (isset($existe)) {
                                                                            echo $existe;
                                                                        } ?></div>
                        </div>
                    </div>
                    <div class="e-contenido1">
                        <div class="e-titlee">Biografia</div>
                        <div class="e-input"><input type="text" name="bio" value="<?php echo $rowA['bio']; ?>"
                                autocomplete="off"></div>
                    </div>
                    <div class="e-contenido1">
                        <div class="e-titlee">Fecha de Nacimiento</div>
                        <div class="e-input"><input type="date" name="birt" value="<?php echo $rowA['birthday']; ?>"
                                autocomplete="off"></div>
                    </div>
                     <div class="e-contenido1">
                        <div class="e-titlee">Ubicacion</div>
                        <div class="e-input"><input type="text" name="ubicacion" value="<?php echo $rowA['ubicacion']; ?>"
                                autocomplete="off"></div>
                    </div>
                    <div class="e-contenido1">
                        <div class="e-titlee">Correo electronico</div>
                        <div class="e-input"><input type="text" name="email" value="<?php echo $rowA['email']; ?>"
                                autocomplete="off" readonly>
                            <br>
                        </div>

                        <div class="e-contenido1">
                            <div class="e-titlee">Sexo</div>
                            <div class="e-input">
                                <?php
                                require "conexion.php";
                                $sqlgen = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'");
                                $rowgen = $sqlgen->fetch_array();
                                if (!isset($rowgen['sex'])) {
                                    $genero = "";

                                ?>
                                <select name="sex" id="" required>
                                    <option value="">Selecciona tu genero</option>
                                    <option value="H" <?php if ($genero == "H") echo "selected"; ?>>Hombre</option>
                                    <option value="M" <?php if ($genero == "M") echo "selected"; ?>>Mujer</option>
                                </select><?php
                                                require "conexion.php";
                                            } else {
                                                if ($rowgen['sex'] == 'H') { ?>
                                <select name="sex" id="" required>
                                    <option value="H" <?php if ($genero == "H") echo "selected"; ?>>Hombre</option>
                                    <option value="M" <?php if ($genero == "M") echo "selected"; ?>>Mujer</option>
                                </select>
                                <?php }
                                                if ($rowgen['sex'] == 'M') { ?>
                                <select name="sex" id="" required>
                                    <option value="M" <?php if ($genero == "M") echo "selected"; ?>>Mujer</option>
                                    <option value="H" <?php if ($genero == "H") echo "selected"; ?>>Hombre</option>
                                </select>
                                <?php }
                                            } ?>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="e-contenido1">
                            <div class="e-title"></div>
                            <div class="e-but">
                                <input type="submit" value="Editar" name="editar" class="button_blue"
                            
                            </div>
                        </div>

            </form>



        </div>

    </div>

    </div>

</body>

</html>