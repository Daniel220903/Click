<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foto-perfil.css" type="text/css">
    <title>Escoger foto - Click</title>
    
</head>

<body>
    <?php
    require "conexion.php";

    $sqlFP = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'");
    $rowFP = $sqlFP->fetch_array();

    ?>
    <?php

    if (isset($_SESSION['id'])) {
       
        require "conexion.php";

        $solicitar = $mysqli->query("SELECT * FROM users WHERE id ='" . $_SESSION['id'] . "'");
        $rowFP = $solicitar->fetch_assoc();
    ?>




    <div class="wrapper">
        <div class="cont-img">   
          <a href="home.php"> <img src="images/beta-logo.png" alt="" srcset=""></a> 
        </div>
        <div class="contenedor-principal">
        <input type="submit" value="Elegir-Foto" name="subir" class="btn" onclick="document.getElementById('seleccionArchivos').click();"  >
        <img id="imagenPrevisualizacion" src="images/subida.png" alt="">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="Imagen_perfil" id="seleccionArchivos" accept="image/*">
                
                <input type="submit" value="Subir foto" name="subir" class="subir" >
            </form>
        </div>
        <?php } ?>
        <?php

   
        
        if (isset($_POST['subir'])) {
            srand (time());
            $aleatorio = rand(1,100);
            $ruta = "fotosperfil/";
            $fichero = $ruta . basename($_FILES['Imagen_perfil']['name']);
            $rutafinal = $ruta . "ID-" . $_SESSION['id'] . "-USER-" . $_SESSION['username'] .$aleatorio. ".jpg";
            if (move_uploaded_file($_FILES['Imagen_perfil']['tmp_name'], $ruta . "ID-" . $_SESSION['id'] . "-USER-" . $_SESSION['username'] .$aleatorio. ".jpg")) {
                require "conexion.php";

                $insertar = $mysqli->query("UPDATE users SET avatar = '$rutafinal' WHERE id = '" . $_SESSION['id'] . "'");
            } else {
                echo "Fallo en el envio";
            }
        }

        ?>

    </div>
    <script src="js/script-fotoperfil.js"></script>
</body>

</html>