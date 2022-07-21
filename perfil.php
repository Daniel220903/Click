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
    <title>Perfil - Click</title>
    <meta charset="UTF-8">
    <meta name="title" content="Click">
    <meta name="description" content="Click">
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/lateral.css">
    <link rel="stylesheet" href="css/home2.css">
    <link rel="stylesheet" href="css/perfil4.css">
     <link rel="stylesheet" href="css/btn-perfil.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <?php

    if (isset($_GET['username'])) {
        require "conexion.php";

        $sqlA = $mysqli->query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
        $rowA = $sqlA->fetch_array();

        $sqlB = $mysqli->query("SELECT * FROM publicaciones WHERE user = '" . $rowA['id'] . "' AND status_pub != 'exclusivo'  AND estado != 'eliminado' ORDER BY id DESC  ");

        $totalp = $sqlB->num_rows;

        $sqlBExclu = $mysqli->query("SELECT * FROM publicaciones WHERE user = '" . $rowA['id'] . "'  AND status_pub != 'gratuito' AND estado != 'eliminado' ORDER BY id DESC");
        $totalpExclu = $sqlBExclu->num_rows;


        $sqlC = $mysqli->query("SELECT * FROM seguidores WHERE seguido = '" . $rowA['id'] . "' AND aprobada = 1");
        $totalS = $sqlC->num_rows;

        $sqlD = $mysqli->query("SELECT * FROM seguidores WHERE seguidor = '" . $rowA['id'] . "' AND aprobada = 1");
        $totalSe = $sqlD->num_rows;

        $yaExiste = $mysqli->query("SELECT * FROM seguidores WHERE seguidor = '" . $_SESSION['id'] . "' AND seguido = '" . $rowA['id'] . "' ");
        $yaEnviaste = $yaExiste->num_rows;

        $yaAprobo = $mysqli->query("SELECT * FROM seguidores WHERE seguidor = '" . $_SESSION['id'] . "' AND aprobada = 1 AND seguido = '" . $rowA['id'] . "'");
        $tAprobo = $yaAprobo->num_rows;

    ?>

    <?php
        if (isset($_GET['seguir'])) {
            require "conexion.php";

            if ($yaEnviaste > 0) {
                echo "Ya enviaste una solicitud a este usuario";
            } else {

                if ($rowA['private_profile'] == 1) {
                    $aprobado = 0;
                } else {
                    $aprobado = 1;
                }

                $sqlG = $mysqli->query("INSERT INTO seguidores (seguidor,user_seguidor,seguido,user_seguido,aprobada,fecha) VALUES ('" . $_SESSION['id'] . "','" . $_SESSION['username'] . "','" . $rowA['id'] . "','" . $rowA['username'] . "','$aprobado',now())");


                if ($sqlG) {
                    header("Location: perfil.php?username=" . $_GET['username'] . "");
                }
            }
        }
        if (isset($_GET['noseguir'])) {
            require "conexion.php";
            $sqlG = $mysqli->query("DELETE FROM seguidores WHERE seguidor = '" . $_SESSION['id'] . "' AND seguido = '" . $rowA['id'] . "' ");
            if ($sqlG) {
                header("Location: perfil.php?username=" . $_GET['username'] . "");
            }
        }
        ?>

    <?php include "header.php"; ?>
    <?php include "lateralheader.php"; ?>

    <div class="h-content">

        <div class="p-top">
            <div class="p-foto">
                <img src="images/card-pattern.svg" class="back-image-profile">
                <img src="<?php echo $rowA['avatar']; ?>" width="180" height="180" class="image-profile">
            </div>
            <div class="p-name">
                <div class="p-user"><?php echo $rowA['username']; ?></div>
                <?php if ($rowA['verified'] == 1) { ?>
                <div class="p-user-verified"><img src="images/verificado.png"></div>
                <?php } ?>
                <?php if ($rowA['id'] == $_SESSION['id']) { ?>
                <div class="p-editar"><a href="editar_perfil.php"><button class="button_white">
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/OR6SzrfoMFg.png?
                                _nc_eui2=AeFWJ1CrutKrbn3KVoGuuKmm_i5mCW1n3JD-LmYJbWfckLDaex4WZSNCE
                                wXmLLTMG5cy1uAGrzLpD_OT-LN7mcz5">
                            Editar perfil</button></a></div>
                <div class="p-creador"><a href="creador.php"><button class="button_white">
                            <i class="bx bxl-sketch bx-rotate-0 bx-none bx-flip-none"
                                style="color: rgb(0, 0, 0); font-size: 20px;"></i>
                            Creador
                        </button></a></div>

                <?php } else { ?>

                <?php if ($tAprobo == 0) { ?>

                <?php if ($yaEnviaste > 0) { ?>
                <div class="p-editar"><button class="button_blue">Solicitud enviada</button></div>
                <?php } else { ?>
                 <a href="reportarusuarios.php?username=<?php echo $_GET['username']; ?>">
                    <div class="p-editar"><button class="button_blue">reportar</button></div>
                </a>
                <a href="?seguir=seguir&username=<?php echo $_GET['username']; ?>">
                    <div class="p-editar"><button class="button_blue">Seguir</button></div>
                </a>
                <?php } ?>
                <?php }
                        if ($tAprobo == 1) { ?>
                         <a href="reportarusuarios.php?username=<?php echo $_GET['username']; ?>">
                    <div class="p-editar"><button class="button_blue">reportar</button></div>
                </a>
                <a href="?noseguir=noseguir&username=<?php echo $_GET['username']; ?>">
                    <div class="p-editar"><button class="button_blue">Dejar de Seguir</button></div>
                </a>
                <?php  }
                    } ?>
                <!--<div class="p-likes">
                    <a href="mislikes.php?username=<?php //echo $rowA['username']; ?>">
                        <svg aria-label="Ya no me gusta" class="pressed-button" color="#ed4956" fill="#ed4956"
                            height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 
                                6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 
                                1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                            </path>
                        </svg>
                    </a>
                </div>-->
            </div>
            <div class="var"></div>
            <div class="p-info">
                <div class="p-infor"><a href=""><b><?php echo $totalp; ?></b> Publicaciones</a>
                </div>

                <div class="p-infor"><b><?php echo $totalS; ?></b> <a
                        href="seguidores.php?username=<?php echo $rowA['username']; ?>">seguidores</a>
                </div>
                <div class="p-infor"><b><?php echo $totalSe; ?></b> <a
                        href="seguidos.php?username=<?php echo $rowA['username']; ?>"> seguidos </a></div>
            </div>
            <br>
            <br>
            <div class="p-nombre"><?php echo $rowA['name']; ?></div>
            <div class="p-description"><i class='bx bx-bookmark'></i><br><?php echo $rowA['bio']; ?></div>
            <div class="general-info">
                <div class="p-location"><i class='bx bx-home'></i><?php if (isset($rowA['ubicacion'])) {
                                                                            echo $rowA['ubicacion']; ?>
                    <?php } else { ?> Ubicacion no asignada <?php } ?></div>
                <div class="p-location"><i class='bx bx-conversation'></i><?php echo $rowA['email']; ?></div>
                <div class="p-location"><i class='bx bx-calendar'></i><?php if (isset($rowA['birthday'])) {
                                                                                echo $rowA['birthday']; ?>
                    <?php } else { ?> Fecha de nacimiento no asignada <?php } ?></div>
                <?php if ($rowA['verified'] == 1) { ?>
                <div class="p-location"><i class='bx bx-award'></i>Correo electronico Verificado</div>
                <?php } else { ?>
                <div class="p-location"><i class='bx bx-no-entry'></i>Correo electronico NO Verificado</div>
                <?php } ?>
            </div>
        </div>

        <div class="p-mid">
             <br><br>
                <a href="perfil.php?username=<?php echo $rowA['username']; ?>">
                    <button class="btn btn-borde hover-cursor hover-fill" id="btn-degradado">Contenido Gratuito</button></a>
                <a href="perfilpago.php?username=<?php echo $rowA['username']; ?>">
                    <button class="btn btn-borde hover-cursor hover-fill" id="btn-degradado">Contenido Exclusivo</button></a>
                <br><br>
        </div>
        <div id="gratuito">
            <?php

                if ($rowA['private_profile'] == 1 and $rowA['id'] != $_SESSION['id'] and $tAprobo == 0) {
                    echo "Si deseas ver sus fotos o videos sigue a este usuario";
                } else {
                ?>

            <?php
                    require "conexion.php";
                    while ($rowB = $sqlB->fetch_array()) {
                        $sqlD = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '" . $rowB['id'] . "' 
                        AND status != 'exclusivo' AND estado != 'eliminado' ORDER BY id desc");
                        $rowD = $sqlD->fetch_array();
                        $countLikes = $mysqli->query("SELECT * FROM likes WHERE usuario = '" . $_SESSION['id'] . "' AND post = '" . $rowB['id'] . "'");
                        $cLikes = $countLikes->num_rows;

                    ?>

            <div class="h2-cont">
                <div class="hl-top">
                    <div class="hl-profile">
                        <div class="hl-pic"><a href="perfil.php?username=<?php echo $rowA['username']; ?>"><img
                                    src="<?php echo $rowA['avatar']; ?>" width="50" height="50"></a></div>
                    </div>
                    <div class="hl-username">
                        <div class="hl-name"><a
                                href="perfil.php?username=<?php echo $rowa['username']; ?>"><?php echo $rowA['username']; ?></a>
                        </div>
                        <div class="hl-location">
                            Ubicacion
                            <?php
                                        if ($rowA['id'] == $_SESSION['id']) {
                                        ?>
                            <a class="delete" href="borrar_pub.php?id=<?php echo $rowB['id'] ?>"><i
                                    class="bx bx-trash"></i></a>
                            <?php } ?>

                        </div>

                    </div>
                </div>
                <div class="hl-middle">
                    <?php if ($rowD['type'] == 'imagen') { ?>
                    <img src="archivos/<?php echo $rowD['ruta']; ?>" width="100%"
                        class="<?php echo $rowD['filtro']; ?>">
                    <?php }
                                if ($rowD['type'] == 'video') { ?>
                    <video src="videoaudio/<?php echo $rowD['ruta']; ?>" width="100%" controls></video>
                    <?php }
                                if ($rowD['type'] == 'texto') {
                                ?>
                    <br>
                    <p><?php echo $rowB['descripcion']  ?></p>
                    <br><?php } ?>
                </div>
                <!--<div class="hl-section-likes">
                    <div style=" float: left; cursor: pointer;">
                        <p><?php //echo $rowB['likes']; ?></p>
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
                    <?php if ($rowD['type'] != 'texto') { ?>
                    <strong style="color: #262626;"><?php echo $rowA['username']; ?></strong>
                    <?php echo $rowB['descripcion']; ?>
                    <?php } else {
                                } ?>
                </div>
            </div>
            <br>

            <?php }
                } ?>


        </div>

    </div>
    <br><br>
    <?php } ?>


    <style>
    .h2-cont {

        background-color: #FFF;
        width: 70%;
        position: relative;

        border: 1px solid #E6E6E6;
        padding: 1rem 0.8rem;
        border-radius: 1rem;
        margin: auto;
    }
    </style>
</body>

</html>