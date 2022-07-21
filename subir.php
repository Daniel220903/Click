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
    <title>Sube tu foto - Click</title>
    <meta charset="UTF-8">
    <meta name="title" content="Click">
    <meta name="description" content="Photogram">
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <link href="css/subir3.css" rel="stylesheet" type="text/css" />
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/tooltip2.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript">
    $(window).load(function() {
        $(function() {
            $('#file-input').change(function(e) {
                addImage(e);
            });

            function addImage(e) {
                var file = e.target.files[0],
                    imageType = /image.*/;

                if (!file.type.match(imageType))
                    return;

                var reader = new FileReader();
                reader.onload = fileOnload;
                reader.readAsDataURL(file);
            }

            function fileOnload(e) {
                var result = e.target.result;
                $('#imgSalida').attr("src", result);
            }
        });
    });
    </script>

    <script>
    function capturar() {
        var resultado = "";

        var porNombre = document.getElementsByName("filter");
        for (var i = 0; i < porNombre.length; i++) {
            if (porNombre[i].checked)
                resultado = porNombre[i].value;
        }

        var elemento = document.getElementById("resultado");
        if (elemento.className == "") {
            elemento.className = resultado;
            elemento.width = "600";
        } else {
            elemento.className = resultado;
            elemento.width = "600";
        }
    }
    </script>
</head>

<?php include "header.php";
?>
<?php include "lateralheader.php";
?>
<main class="contenedor-t">
    <p>
        <a class="tooltip">
            <i class="fas fa-info-circle"></i>
            <span class="tooltip-box">Subir Imagen:<br>
                Clickea en el boton de subir<br>
                Escoge la imagen que desees subir desde tu dispositivo,<br>
                Si deseas aplicar un filtro como sale en el ejemplo de las tortugas hazlo,<br>
                Asignale una categoria y un status a tu publicacion<br>
                y ponle una descripcion para publicarla

            </span>
        </a>
    </p>
</main>

<div class="image-container">
    <form action="" method="post" enctype="multipart/form-data">

        <div class="h-icon-submit">
            <div class="image-upload">
                <label for="file-input" class="file-input">
                    <img src="images/icons/mas.png" width="50" title="Sube una foto ó video">
                </label>
                <input id="file-input" type="file" name="file-input" hidden="" />
            </div>
        </div>

        <body onload="capturar()">

            <div class="image-checker">
                <div class="imgcheck">
                    <label>
                        <input type="radio" name="filter" value="" onclick="capturar()">
                        <img src="images/filtro2.jpg" class="" width="150">
                    </label>
                </div>
                <div class="imgcheck">
                    <label>
                        <input type="radio" name="filter" value="willow" onclick="capturar()">
                        <img src="images/filtro2.jpg" class="willow" width="150">
                    </label>
                </div>
                <div class="imgcheck">
                    <label>
                        <input type="radio" name="filter" value="lofi" onclick="capturar()">
                        <img src="images/filtro2.jpg" class="lofi" width="150">
                    </label>
                </div>
                <div class="imgcheck">
                    <label>
                        <input type="radio" name="filter" value="rise" onclick="capturar()">
                        <img src="images/filtro2.jpg" class="rise" width="150">
                    </label>
                </div>
                <div class="imgcheck">
                    <label>
                        <input type="radio" name="filter" value="moon" onclick="capturar()">
                        <img src="images/filtro2.jpg" class="moon" width="150">
                    </label>
                </div>
            </div>


            <div id="resultado" class=""><img id="imgSalida" width="600" /></div>


            <div id="status">

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

                <select name="status" id="format" required>
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

            <textarea rows="6" cols="100%" name="descripcion" placeholder="Descripción de tu publicación"></textarea>



            <button name="submit" class="btn btn--2" id="inptsearch">
                <i class='bx bx-send' type='solid'></i>
            </button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {

    require "conexion.php";

    $imagen = $_FILES['file-input']['tmp_name'];
    $imagen_tipo = exif_imagetype($_FILES['file-input']['tmp_name']);

    if ($imagen_tipo == IMAGETYPE_PNG or $imagen_tipo == IMAGETYPE_JPEG or $imagen_tipo == IMAGETYPE_BMP) {

        $filtro = $mysqli->real_escape_string($_POST['filter']);
        $descripcion = $mysqli->real_escape_string($_POST['descripcion']);
        $ubicacion = $mysqli->real_escape_string($_POST['ubicacion']);

        if (is_uploaded_file($_FILES['file-input']['tmp_name'])) {

            $result = $mysqli->query("SHOW TABLE STATUS WHERE `Name` = 'archivos'");
            $data = $result->fetch_assoc();
            $next_id = $data['Auto_increment'];

            $ext = ".jpg";
            $namefinal = trim($_FILES['file-input']['name']);
            $namefinal = str_replace(" ", "", $namefinal);
            $aleatorio = substr(strtoupper(md5(microtime(true))), 0, 6);
            $namefinal = 'ID-' . $next_id . '-NAME-' . $aleatorio;

            if ($imagen_tipo == IMAGETYPE_PNG) {
                $image = imagecreatefrompng($imagen);
                imagejpeg($image, 'archivos/' . $namefinal . $ext, 100);

                $nuevaimagen = 'archivos/' . $namefinal . $ext;
            } else {
                $nuevaimagen = $imagen;
            }

            $original = imagecreatefromjpeg($nuevaimagen);
            $max_ancho = 1080;
            $max_alto = 1080;
            list($ancho, $alto) = getimagesize($nuevaimagen);

            $x_ratio = $max_ancho / $ancho;
            $y_ratio = $max_alto / $alto;

            if (($ancho <= $max_ancho) && ($alto <= $max_alto)) {
                $ancho_final = $ancho;
                $alto_final = $alto;
            } else if (($x_ratio * $alto) < $max_alto) {
                $alto_final = ceil($x_ratio * $alto);
                $ancho_final = $max_ancho;
            } else {
                $ancho_final = ceil($y_ratio * $ancho);
                $alto_final = $max_alto;
            }

            $lienzo = imagecreatetruecolor($ancho_final, $alto_final);

            imagecopyresampled($lienzo, $original, 0, 0, 0, 0, $ancho_final, $alto_final, $ancho, $alto);

            imagedestroy($original);

            imagejpeg($lienzo, "archivos/" . $namefinal . $ext);
        }


        if ($_FILES['file-input']['tmp_name']) {

            $queryp = $mysqli->query("INSERT INTO publicaciones (user,descripcion,ubicacion,fecha,status_pub,categoria_pub,type) 
            VALUES ('" . $_SESSION['id'] . "','" . $descripcion . "','" . $ubicacion . "',now(),'$status','$categoria','imagen')");

            $ultpub = $mysqli->query("SELECT id FROM publicaciones WHERE user = '" . $_SESSION['id'] . "' ORDER BY id DESC LIMIT 1");
            $ultp = $ultpub->fetch_array();

            $query = "INSERT INTO archivos (user,ruta,tipo,size,publicacion,filtro,fecha,status,categoria_arch,type) 
            VALUES ('" . $_SESSION['id'] . "','" . $namefinal . $ext . "','" . $_FILES['file-input']['type'] . "',
            '" . $_FILES['file-input']['size'] . "','" . $ultp['id'] . "','" . $filtro . "',now(),'$status','$categoria','imagen')";

            $mysqli->query($query);

            if ($query) {
                header("refresh: 0; url = home.php");
            }
        }
    } else {
        echo "<script type='text/javascript'>alert('Solo puedes subir imágenes');</script>";
    }
}
?>


</body>

</html>