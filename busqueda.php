<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}
error_reporting(0);
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar - Click</title>

    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <link href="css/seaarch.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/likes.js"></script>
    <script src="js/favoritos.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <link rel="stylesheet" href="css/home2.css">
    <link rel="stylesheet" href="css/tooltip2.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

</head>

<body>

    <?php include "header.php";
    ?>
    <?php include "lateralheader.php";
    ?>

    <main class="contenedor-t">
        <p>
            <a class="tooltip">
                <i class="fas fa-info-circle"></i>
                <span class="tooltip-box">Buscador: Encuentra publicaciones mediante palabras clave o categorias
                </span>
            </a>
        </p>
    </main>

    <div class="box">
        <form method="get">
            <div class="form" id="sarch-box">
                <input type="text" placeholder="." name="busqueda" class="form__input" autocomplete="off">
                <label for="email" class="form__label">Buscar</label>
            </div>
            <button name="enviar" value="Buscar" class="btn btn--2" id="inptsearch">
                Buscar
            </button>
        </form>
    </div>




    <?php
    require "conexion.php";

    if (isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta  = $mysqli->query("SELECT * FROM publicaciones WHERE status_pub = 'gratuito' AND estado = 'normal' AND descripcion LIKE '%$busqueda%' OR categoria_pub LIKE '%$busqueda%' ORDER BY id DESC");
        while ($rowA = $consulta->fetch_array()) {
            $sqlB = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowA['user'] . "'");
            $rowB = $sqlB->fetch_array();
            $sqlC = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '" . $rowA['id'] . "' AND status != 'exclusivo' AND estado = 'normal'");
            $rowC = $sqlC->fetch_array();

            $countLikes = $mysqli->query("SELECT * FROM likes WHERE usuario = '" . $_SESSION['id'] . "' AND post = '" . $rowA['id'] . "'");
            $cLikes = $countLikes->num_rows;
    ?>

    <div class="contanier-search2">
        <div class="hl-top">
            <div class="hl-profile">
                <div class="hl-pic2"><a href="perfil.php?username=<?php echo $rowB['username']; ?>"><img
                            src="<?php echo $rowB['avatar']; ?>" width="50" height="50"></a></div>
            </div>
            <div class="hl-username">
                <div class="hl-name"><a
                        href="perfil.php?username=<?php echo $rowB['username']; ?>"><?php echo $rowB['username']; ?></a>
                </div>
                <div class="hl-location">
                    <b>Ubicacion
                        <?php
                                if ($rowA['user'] == $_SESSION['id']) {
                                ?>
                        <a href="borrar_pub.php?id=<?php echo $rowA['id'] ?>"><img src="images/icons/deletepub.png"
                                width="30" height="30"></a></b>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="hl-middle">
            <?php if ($rowA['type'] == 'imagen') { ?>
            <img src="archivos/<?php echo $rowC['ruta']; ?>" width="100%" class="<?php echo $rowC['filtro']; ?>">
            <?php }
                    if ($rowA['type'] == 'video') { ?>
            <video src="videoaudio/<?php echo $rowC['ruta']; ?>" width="100%" controls></video>
            <?php }
                    if ($rowA['type'] == 'texto') {
                    ?>
            <br>
            <p><?php echo $rowA['descripcion']  ?></p>
            <br>
            <?php } ?>
        </div>
        <!--<div class="hl-section-likes">
            <div style=" float: left; cursor: pointer;">
                <p><?php //echo $rowA['likes']; ?></p>
            </div>

            <?php if ($cLikes == 0) { ?>
            <div id="<?php //echo $rowA['id']; ?>" class="like" style="float: left; cursor: pointer;">
                <img src="images/icons/cora.png" id="search">
                <span id="result"></span>

            </div>
            <?php } else { ?>
            <div id="<?php //echo $rowA['id']; ?>" class="like" style="float: left; cursor: pointer;">
                <img src="images/icons/cora2.png">
            </div>
            <?php }  ?>


            <div style="float: left;"> <a href="comentarios.php"><img src="images/icons/comentario.png"></a>
            </div>

            <?php if ($cLikes == 0) { ?>
            <div id="FAV<?php //echo $rowA['id']; ?>" class="fav" style="float: left;"><img
                    src="images/icons/favorito.png"></div>
            <?php } else { ?>
            <div id="FAV<?php //echo $rowA['id']; ?>" class="fav" style="float: left;"><img
                    src="images/icons/favorito2.png"></div>
            <?php } ?>

        </div> -->
        <div class="hl-bottom">
            <?php if ($rowA['type'] != 'texto') { ?>
            <strong style="color: #262626;"><?php echo $rowB['username']; ?></strong>
            <?php echo $rowA['descripcion']; ?>
            <?php } else {
                    } ?>
        </div>

    </div>
    <br><br>

    <?php
        }
    }
    ?>

    <style>
    .contanier-search2 {
        background-color: #FFF;
        width: 70%;
        margin-bottom: 4.063rem;

        border: 1px solid #E6E6E6;
        padding: 1rem 0.8rem;
        border-radius: 1rem;
        margin: auto;
    }
    </style>

</body>

</html>