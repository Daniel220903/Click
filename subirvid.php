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
<html lang="es">

<head>
    <title>Subir Video - Click</title>
    <meta charset="UTF-8">
    <meta name="title" content="Click">
    <meta name="description" content="Click">
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/tooltip2.css">
    <link rel="stylesheet" href="css/subirvid2.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
</head>

<body>
    <?php include "header.php"; ?>
    <?php include "lateralheader.php"; ?>

    <main class="contenedor-t">
        <p>
            <a class="tooltip">
                <i class="fas fa-info-circle"></i>
                <span class="tooltip-box">Subir Video:<br>
                    Clickea en el boton de subir<br>
                    Escoge el video que desees,<br>
                    Asignale una categoria y un status a tu publicacion<br>
                    y ponle una descripcion para publicarlo.

                </span>
            </a>
        </p>
    </main>

    <div class="video-container">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <div class="h-icon-submit">
                <div class="image-upload">
                    <label for="file-input" class="file-input">
                        <img src="images/icons/mas.png" width="50" title="Sube una foto ó video">
                    </label>
                    <input id="file-input" type="file" name="fichero" fichero hidden="" />
                </div>
            </div>


            <div class="select">
                <?php $categoria = "" ?>
                <select name="categoria" id="" required>
                    <option value="">Selecciona una categoria</option>
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
                }
                ?>
            </div>



            <div class="select-dos">
                <?php $status = ""; ?>
                <select name="status" id="" required>
                    <option value="">Selecciona el Status</option>
                    <option value="gratuito" <?php if ($status == "gratuito") echo "selected" ?>>Gratuito</option>
                    <option value="exclusivo" <?php if ($status == "exclusivo") echo "selected" ?>>Exclusivo
                    </option>
                </select>
                <?php if (isset($_POST['submit'])) {
                    require "conexion.php";
                    $status = $_POST['status'];
                } ?>
            </div>

            <textarea rows="6" cols="100%" name="descripcion" placeholder="Descripción de tu video"></textarea>

            <button name="submit" class="btn btn--2" id="inptsearch">
                <i class='bx bx-send' type='solid'></i>
            </button>

    </div>




    <?php
    if (isset($_POST['submit'])) {
        if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {

            $result = $mysqli->query("SHOW TABLE STATUS WHERE `Name` = 'archivos'");
            $data = $result->fetch_assoc();
            $next_id = $data['Auto_increment'];

            $ruta = "videoaudio/";
            $nombrefinal = trim($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
            $nombrefinal = str_replace(" ", "", $nombrefinal);
            $aleatorio = substr(strtoupper(md5(microtime(true))), 0, 6);
            $nombrefinal = 'ID-' . $next_id . '-NAME-' . $aleatorio . '.mp4';

            $upload = $ruta . $nombrefinal;


            if (move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                require "conexion.php";
                echo "<b>Upload exitoso!. Datos:</b><br>";
                echo "Nombre: <i><a href=\"" . $ruta . $nombrefinal . "\">" . $_FILES['fichero']['name'] . "</a></i><br>";
                echo "Tipo MIME: <i>" . $_FILES['fichero']['type'] . "</i><br>";
                echo "Peso: <i>" . $_FILES['fichero']['size'] . " bytes</i><br>";
                echo "<br><hr><br>";


                $descripcion = $mysqli->real_escape_string($_POST['descripcion']);
                $ubicacion = $mysqli->real_escape_string($_POST['ubicacion']);

                $queryp = $mysqli->query("INSERT INTO publicaciones (user,descripcion,ubicacion,fecha,status_pub,categoria_pub,type) 
            VALUES ('" . $_SESSION['id'] . "','" . $descripcion . "','" . $ubicacion . "',now(),'$status','$categoria','video' )");

                $ultpub = $mysqli->query("SELECT id FROM publicaciones WHERE user = '" . $_SESSION['id'] . "' ORDER BY id DESC LIMIT 1");
                $ultp = $ultpub->fetch_array();

                $query = $mysqli->query("INSERT INTO archivos (user,ruta,tipo,size,publicacion,fecha,status,categoria_arch,type) 
            VALUES ('" . $_SESSION['id'] . "','" . $nombrefinal . "','" . $_FILES['fichero']['type'] . "','" . $_FILES['fichero']['size'] . "'
            ,'" . $ultp['id'] . "',now(),'$status','$categoria','video')");

                if ($query) {
                    header("refresh: 3; url = home.php");
                }
            }
        }
    }
    ?>

    </form>



</body>

</html>