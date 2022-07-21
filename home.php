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
    <title>Home - Click</title>
    <meta charset="UTF-8">
    <meta name="description" content="Click">
    <!-- -->
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/lateral.css">
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/likes.js"></script>
    <script src="js/favoritos.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include "header.php"; ?>
    <?php include "lateralheader.php"; ?>

    <div class="h-content">

        <div class="h-right">
            <h3>Sigue a nuestros creadores</h3>
            <?php
            require "conexion.php";

            $sqlone = $mysqli->query("SELECT * FROM creadores");
            while ($rowone = $sqlone->fetch_array()) {
                $sqltwo = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowone['id_creador'] . "'");
                $rowtwo = $sqltwo->fetch_array();

            ?>
            <div class="friends">
                <!-- Aqui para recomendar los amigos puedes poner una busqueda a la base 
                donde si tiene mas de 5 publicaciones puede salir en la lista de personas
                para seguir -->

                <div class="recommended-left">
                    <a href="perfil.php?username=<?php echo $rowtwo['username']; ?>"><img
                            src="<?php echo $rowtwo['avatar']; ?>" alt=""></a>
                </div>
                <div class="recommended-right">
                    <p><?php echo $rowtwo['username']; ?></p>
                    <p><?php echo $rowtwo['bio']; ?></p>
                </div>

            </div>
            <?php }
            ?>
        </div>

        <!-- ESTE ES EL CONTENEDOR DE LAS IMAGENES  -->
        <div class="h-left" id="datos">
            <?php
            require "conexion.php";
            $sqlA = $mysqli->query("SELECT * FROM publicaciones WHERE status_pub != 'exclusivo' AND estado != 'eliminado'  ORDER BY id DESC");
            while ($rowA = $sqlA->fetch_array()) {
                $sqlB = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowA['user'] . "'");
                $rowB = $sqlB->fetch_array();
                $sqlC = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '" . $rowA['id'] . "' AND status != 'exclusivo'");
                $rowC = $sqlC->fetch_array();

                $countLikes = $mysqli->query("SELECT * FROM likes WHERE usuario = '" . $_SESSION['id'] . "' AND post = '" . $rowA['id'] . "'");
                $cLikes = $countLikes->num_rows;


            ?>

            <div class="hl-cont">
                <div class="hl-top">
                    <div class="hl-profile">
                        <div class="hl-pic"><a href="perfil.php?username=<?php echo $rowB['username']; ?>"><img
                                    src="<?php echo $rowB['avatar']; ?>" width="50" height="50"></a></div>
                    </div>
                    <div class="hl-username">
                        <div class="hl-name"><a
                                href="perfil.php?username=<?php echo $rowB['username']; ?>"><?php echo $rowB['username']; ?></a>
                                <?php if ($rowA['user'] != $_SESSION['id']) { 
                                $consulta = $mysqli->query("SELECT * FROM reporte_publicacion WHERE 
                                publicacion = '" . $rowA['id'] . "' AND reportador = '" . $_SESSION['id'] . "'");
                                 $rowconsulta = $consulta->fetch_array();
                                    if (isset($rowconsulta)) { ?>
                                    <p class="report">Reported</p>
                            <?php } else { ?>
                           <a href="reportarpublicacion.php?id=<?php echo $rowA['id'] ?>"><img
                                    src="images/icons/bxs-radiation.svg" class="report"></a>
                            <?php } } ?>
                            <style>
                            .report {
                                float: right;
                                padding-right: 10px;
                                padding-bottom: 10px;
                            }

                            .bx-trash {
                                padding-right: 10px;
                            }
                            </style>
                        </div>
                        <div class="hl-location">
                            <?php echo $rowA['fecha']; ?>
                            <?php
                                if ($rowA['user'] == $_SESSION['id']) {
                                ?>
                            <a class="delete" href="borrar_pub.php?id=<?php echo $rowA['id'] ?>"><i
                                    class="bx bx-trash"></i></a>
                            <?php } ?>

                        </div>

                    </div>
                </div>
                <div class="hl-middle">
                    <?php if ($rowA['type'] == 'imagen') { ?>
                    <img src="archivos/<?php echo $rowC['ruta']; ?>" width="100%"
                        class="<?php echo $rowC['filtro']; ?>">
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
               <!-- <div class="hl-section-likes">
                    <div style=" float: left; cursor: pointer;">
                        <p><?php //echo $rowA['likes']; ?></p>
                    </div>

                    <?php if ($cLikes == 0) { ?>
                    <div id="<?php //echo $rowA['id']; ?>" class="like" style="float: left; cursor: pointer;">
                        <img src="images/icons/cora.png" id="search">
                        <span id="result"></span>

                    </div>
                    <?php } else { ?>
                    <div id="<?php // echo $rowA['id']; ?>" class="like" style="float: left; cursor: pointer;">
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

            <?php } ?>

        </div>


    </div>



</body>

</html>