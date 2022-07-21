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
    <title>Document</title>
    <link rel="stylesheet" href="css/typefile.css">
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/lateral.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/tooltip2.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</head>

<body>

    <?php include "header.php"; ?>
    <?php include "lateralheader.php"; ?>
 <main class="contenedor-t">
        <p>
            <a class="tooltip">
                <i class="fas fa-info-circle"></i>
                <span class="tooltip-box">Subir Archivos: Se admiten 3 tipos de archivos:<br>
                    Video<br>
                    Imagen<br>
                    Texto<br>
                    Haz click en el apartado que desees subir para realizar una publicacion
                </span>
            </a>
        </p>
    </main>

    <div class="container__cards">

        <div class="card">


            <div class="cover">
                <img src="images/catimagen.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Subir Imagen</h2>
                <p>Sube tus imagenes, etiquetalas con una categoria y puedes acompañarlas de un filtro y una breve descripcion.</p>
                <a href="subir.php"><input type="button" value="Subir"></a>
            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="images/cattexto.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Subir Texto</h2>
                <p>Redacta lo que quieras, una noticia, opinion, etc.
                <br>Todo esto acompañado de una categoria.</p>
                <a href="subirtxt.php"> <input type="button" value="Subir"></a>
            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="images/catvideo.png" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h2>Subir Video</h2>
                <p>Sube tu video, acompañalo con una descripcion y etiquetalo con una categoria para tener mayor alcance.</p>
                <a href="subirvid.php"> <input type="button" value="Subir"></a>
            </div>
        </div>

    </div>

</body>

</html>