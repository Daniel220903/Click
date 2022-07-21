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
    <title>Subir textos - Click</title>
    <meta name="description" content="Click">
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <link rel="stylesheet" href="css/subirtxt2.css">
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
                <span class="tooltip-box">Subir Texto:<br>
                    Si solo deseas publicar un texto, redacta lo que quieras<br>
                    Asignale una categoria y un status a tu publicacion<br>
                    y subela
                </span>
            </a>
        </p>
    </main>

    <div class="txt-sender">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <div class="description-label">
                <label for="email" class="form__label"></label>
                <textarea rows="6" cols="100%" name="descripcion" placeholder="Descripción de tu publicación"
                    required></textarea>
            </div>


            <div class="select">
                <?php $categoria = "" ?>
                <select name="categoria" id="format" required>
                    <option selected disabled>Escoge una categoria</option>
                    <option value="deportes" <?php if ($categoria == "deportes") echo "selected"; ?>>Deportes
                    </option>
                    <option value="musica" <?php if ($categoria == "musica") echo "selected"; ?>>Musica</option>
                    <option value="videojuegos" <?php if ($categoria == "videojuegos") echo "selected" ?>>
                        Videojuegos
                    </option>
                    <option value="comida" <?php if ($categoria == "comida") echo "selected" ?>>Comida</option>
                    <option value="educativo" <?php if ($categoria == "educativo") echo "selected" ?>>Educativo
                    </option>
                    <option value="historia" <?php if ($categoria == "historia") echo "selected" ?>>Historia
                    </option>
                    <option value="actualidad" <?php if ($categoria == "actualidad") echo "selected" ?>>Actualidad
                    </option>
                    <option value="moda" <?php if ($categoria == "moda") echo "selected" ?>>Moda</option>
                    <option value="hogar" <?php if ($categoria == "hogar") echo "selected" ?>>Hogar</option>
                    <option value="entretenimiento" <?php if ($categoria == "entretenimiento") echo "selected" ?>>
                        Entretenimiento</option>
                    <option value="autos" <?php if ($categoria == "autos") echo "selected" ?>>Autos</option>
                    <option value="kids" <?php if ($categoria == "kids") echo "selected" ?>>Niños</option>
                </select>
                <?php
                if (isset($_POST['submit'])) {
                    require "conexion.php";
                    $categoria = $_POST['categoria'];
                    $descripcion = $mysqli->real_escape_string($_POST['descripcion']);
                }
                ?>
            </div>

            <div class="select-dos">
                <?php $status = ""; ?>
                <select name="status" id="format" required>
                    <option selected disabled>Selecciona el status</option>
                    <option value="gratuito" <?php if ($status == "gratuito") echo "selected" ?>>Gratuito</option>
                    <option value="exclusivo" <?php if ($status == "exclusivo") echo "selected" ?>>Exclusivo
                    </option>
                </select>
                <?php if (isset($_POST['submit'])) {
                    require "conexion.php";
                    $status = $_POST['status'];
                } ?>
            </div>

            <button name="submit" class="btn btn--2" id="inptsearch">
                <i class='bx bx-send' type='solid'></i>
            </button>


            <?php
            if (isset($_POST['submit'])) {

                $queryp = $mysqli->query("INSERT INTO publicaciones (user,descripcion,fecha,status_pub,categoria_pub,type) 
        VALUES ('" . $_SESSION['id'] . "','" . $descripcion . "',now(),'$status','$categoria','texto')");

                $ultpub = $mysqli->query("SELECT id FROM publicaciones WHERE user = '" . $_SESSION['id'] . "' ORDER BY id DESC LIMIT 1");
                $ultp = $ultpub->fetch_array();

                $query = "INSERT INTO archivos (user,tipo,publicacion,fecha,status,categoria_arch,type) 
    VALUES ('" . $_SESSION['id'] . "','text','" . $ultp['id'] . "',now(),'$status','$categoria','texto')";

                $mysqli->query($query);

                if ($query) {
                    header("refresh: 0; url = home.php");
                }
            }
            ?>
        </form>
    </div>



    <!-- Aqui empieza el selector copiado -->




</body>

</html>