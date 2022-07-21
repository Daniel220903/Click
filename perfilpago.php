<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}

include "functions.php";
?>

<?php
require "conexion.php";
$sqlA = $mysqli->query("SELECT private_profile FROM users WHERE id ='" . $_SESSION['id'] . "'");
$rowA = $sqlA->fetch_array();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Perfil Exclusivo - Click</title>
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
    
    <style>
        .general-infoo {
    background-color: #EBE7E7;
    border-radius: 10px;
    height: 280px;
    position: relative;
    top: -250px;
    width: 30%;
    left: 60%;
    margin-right: 8.3%;
    padding: 1rem;
}

    .general-infoo i {
    font-size: 1.5rem;
    margin-right: 1rem;
    }
    </style>

    <?php

    if (isset($_GET['username'])) {
        require "conexion.php";

        $sqlyo = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'");
        $rowyo = $sqlyo->fetch_array();

        $sqlA = $mysqli->query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
        $rowA = $sqlA->fetch_array();

        $sqlB = $mysqli->query("SELECT * FROM publicaciones WHERE user = '" . $rowA['id'] . "'  AND status_pub != 'gratuito' ORDER BY id DESC");
        $totalp = $sqlB->num_rows;

        $sqlC = $mysqli->query("SELECT * FROM seguidores WHERE seguido = '" . $rowA['id'] . "' AND aprobada = 1");
        $totalS = $sqlC->num_rows;

        $sqlD = $mysqli->query("SELECT * FROM seguidores WHERE seguidor = '" . $rowA['id'] . "' AND aprobada = 1");
        $totalSe = $sqlD->num_rows;

        $yaExiste = $mysqli->query("SELECT * FROM seguidores WHERE seguidor = '" . $_SESSION['id'] . "' AND seguido = '" . $rowA['id'] . "' ");
        $yaEnviaste = $yaExiste->num_rows;


        $yaAprobo = $mysqli->query("SELECT * FROM seguidores WHERE seguidor = '" . $_SESSION['id'] . "' AND aprobada = 1 AND seguido = '" . $rowA['id'] . "'");
        $tAprobo = $yaAprobo->num_rows;

        $sqlpr = $mysqli->query("SELECT * FROM creadores WHERE id_creador = '" . $rowA['id'] . "'");
        $rowpr = $sqlpr->fetch_array();

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
                <a href="?seguir=seguir&username=<?php echo $_GET['username']; ?>">
                    <div class="p-editar"><button class="button_blue">Seguir</button></div>
                </a>
                <?php } ?>
                <?php }
                        if ($tAprobo == 1) { ?>
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
             <?php
                    require "conexion.php";
                    $sqlcre = $mysqli->query("SELECT * FROM creadores WHERE id_creador =  '" . $rowA['id'] . "'");
                    $rowcre = $sqlcre->fetch_array();
                 ?>
            <div class="p-nombre"><?php echo $rowA['name']; ?></div>
            <div class="p-description"><i class='bx bx-bookmark'></i><br><?php echo $rowcre['descripcion_creador']; ?></div>
            
            <div class="general-infoo">
                 <?php if (isset($rowcre)) { ?>
                <div class="p-location"><i class='bx bx-purchase-tag'></i><?php echo $rowA['email']; ?>
                </div>
                <?php if ($rowA['verified'] == 1) { ?>
                <div class="p-location"><i class='bx bx-award'></i>Correo electronico Verificado</div>
                <?php } else { ?>
                <div class="p-location"><i class='bx bx-no-entry'></i>Correo electronico NO Verificado</div>
                <?php } ?>
                <div class="p-location"><i class='bx bx-purchase-tag'></i> Suscripcion: <?php echo $rowcre['precio_suscripcion']; ?>$
                </div>
               <?php if ($rowcre['terminos'] == 1) { ?>
                <div class="p-location"><i class='bx bx-award'></i>Terminos y condiciones de creador Aceptados</div>
                <?php } else { ?>
                <div class="p-location"><i class='bx bx-no-entry'></i>Terminos y condiciones de creador NO Aceptados</div>
                <?php } ?>
               <?php 
               $sqlsubs = $mysqli->query("SELECT * FROM pago WHERE creador = '".$rowA['id']."'");
               $numsubs = $sqlsubs->num_rows;
               ?>
                <div class="p-location"><i class='bx bx-book'></i>
                Suscriptores: <?php echo $numsubs ?>
                </div>
                
                 <?php    } else { ?>
                <div class="p-location"><i class='bx bx-no-entry'></i>Este usuario no se ha dado de alta como creador
                </div>
                <?php   } ?>
            </div>



            <style>
            .creator-info {
                background-color: #EBE7E7;
                border-radius: 10px;
                height: 130px;
                position: relative;
                top: -295px;
                width: 39%;
                left: 60%;
                margin-right: 8.3%;
                padding: 1rem;
            }
            </style>
        </div>
        <?php require "conexion.php";
            $sqlPa = $mysqli->query("SELECT * FROM pago WHERE user_creador = '" . $rowA['username'] . "' 
            AND pagador = '" . $_SESSION['id'] . "'  ");
            $rowPa = $sqlPa->fetch_array();

            if ($totalp >= 1) {
                if (isset($rowPa)) {
            ?>
            
        <div class="p-mid">
             <br><br>
                <a href="perfil.php?username=<?php echo $rowA['username']; ?>">
                    <button class="btn btn-borde hover-cursor hover-fill" id="btn-degradado">Contenido Gratuito</button></a>
                <a href="perfilpago.php?username=<?php echo $rowA['username']; ?>">
                    <button class="btn btn-borde hover-cursor hover-fill" id="btn-degradado">Contenido Exclusivo</button></a>
                <br><br>
        </div>
        
        <div class="gratuito">
            <?php
                        require "conexion.php";
                        $pagado = 1;
                        $nopagado = 0;
                        while ($rowC = $sqlB->fetch_array()) {
                            $sqlD = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '" . $rowC['id'] . "' AND 
                            status != 'gratuito' AND estado != 'eliminado' ORDER BY id desc");
                            while ($rowD = mysqli_fetch_array($sqlD)) {
                                $countLikes = $mysqli->query("SELECT * FROM likes WHERE usuario = '" . $_SESSION['id'] . "' AND post = '" . $rowC['id'] . "'");
                                $cLikes = $countLikes->num_rows;
                        ?>


            <div class="h2-cont">

                <?php if ($rowD['type'] == 'imagen') { ?>

                <div class="hl-top">
                    <div class="hl-profile">
                        <div class="hl-pic"><a href="perfil.php?username=<?php echo $rowA['username']; ?>"><img
                                    src="<?php echo $rowA['avatar']; ?>" width="50" height="50"></a></div>
                    </div>
                    <div class="hl-username">
                        <div class="hl-name"><a
                                href="perfil.php?username=<?php echo $rowA['username']; ?>"><?php echo $rowA['username']; ?></a>
                        </div>
                        <div class="hl-location">
                            Ubicacion <?php
                                                                if ($rowA['id'] == $_SESSION['id']) {
                                                                ?>
                            <a class="delete" href="borrar_pub.php?id=<?php echo $rowC['id'] ?>"><i
                                    class="bx bx-trash"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="hl-middle">
                    <img src="archivos/<?php echo $rowD['ruta']; ?>" width="100%"
                        class="<?php echo $rowD['filtro']; ?>">
                </div>

                <?php }
                                    if ($rowD['type'] == 'video') { ?>

                <div class="hl-top">
                    <div class="hl-profile">
                        <div class="hl-pic"><a href="perfil.php?username=<?php echo $rowA['username']; ?>"><img
                                    src="<?php echo $rowA['avatar']; ?>" width="50" height="50"></a></div>
                    </div>
                    <div class="hl-username">
                        <div class="hl-name"><a
                                href="perfil.php?username=<?php echo $rowA['username']; ?>"><?php echo $rowA['username']; ?></a>
                        </div>
                        <div class="hl-location">
                            <b>Ubicacion
                            </b>
 <?php
                                                    if ($rowA['id'] == $_SESSION['id']) {
                                                    ?>
                            <a class="delete" href="borrar_pub.php?id=<?php echo $rowC['id'] ?>"><i
                                    class="bx bx-trash"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="hl-middle">
                    <video src="videoaudio/<?php echo $rowD['ruta']; ?>" width="100%" controls></video>
                </div>

                <?php }
                                    if ($rowD['type'] == 'texto') { ?>
                <br>

                <div class="hl-top">
                    <div class="hl-profile">
                        <div class="hl-pic"><a href="perfil.php?username=<?php echo $rowA['username']; ?>"><img
                                    src="<?php echo $rowA['avatar']; ?>" width="50" height="50"></a></div>
                    </div>
                    <div class="hl-username">
                        <div class="hl-name"><a
                                href="perfil.php?username=<?php echo $rowA['username']; ?>"><?php echo $rowA['username']; ?></a>
                        </div>
                        <div class="hl-location">
                            Ubicacion
                            <?php
                                                    if ($rowA['id'] == $_SESSION['id']) {
                                                    ?>
                            <a class="delete" href="borrar_pub.php?id=<?php echo $rowC['id'] ?>"><i
                                    class="bx bx-trash"></i></a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="hl-middle">
                    <?php
                                            $sqlText = $mysqli->query("SELECT * FROM publicaciones WHERE id = '" . $rowD['publicacion'] . "'");
                                            $rowText = $sqlText->fetch_array(); ?>
                    <p><?php echo $rowText['descripcion']; ?> </p>
                </div>


                <br>
                <?php } ?>


            </div>
            <br>
            <?php }
                        } ?>
        </div>




        <?php
                } else {
                ?>
                
        <div class="p-mid">
             <br><br>
                <a href="perfil.php?username=<?php echo $rowA['username']; ?>">
                    <button class="btn btn-borde hover-cursor hover-fill" id="btn-degradado">Contenido Gratuito</button></a>
                <a href="perfilpago.php?username=<?php echo $rowA['username']; ?>">
                    <button class="btn btn-borde hover-cursor hover-fill" id="btn-degradado">Contenido Exclusivo</button></a>
                <br><br>
        </div>
       
            <div id="paypal-button-container"></div>
            <br><br>
            <?php
                        require "conexion.php";
                        require "clases/captura.php";
                        ?>

            <script
                src="https://www.paypal.com/sdk/js?client-id=AQ9mxtKQNGb5JZCQJGdOSoR2VBTXxFS0sNvvkctUUgckqjbOmcQuAWiqCYfVG09dN93KUIuMxj-eZaQ-&currency=MXN">
            </script>
            <script>
            paypal.Buttons({
                style: {
                    color: 'blue',
                    shape: 'pill',
                    label: 'pay'
                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: <?php echo $rowpr['precio_suscripcion']; ?>
                            }
                        }]
                    });
                },

                onApprove: function(data, actions) {
                    let url =
                        'clases/captura.php?creator=<?php echo $rowA['id']; ?>&creatorname=<?php echo $rowA['username']; ?>&user=<?php echo $_SESSION['id'] ?>&username=<?php echo $rowyo['username'] ?>';
                    actions.order.capture().then(function(detalles) {

                        let url =
                            'clases/captura.php?creator=<?php echo $rowA['id']; ?>&creatorname=<?php echo $rowA['username']; ?>&user=<?php echo $_SESSION['id'] ?>&username=<?php echo $rowyo['username'] ?>';
                        return fetch(url, {
                            method: 'post',
                            headers: {
                                'content-type': 'application/json'
                            },
                            body: JSON.stringify({
                                detalles: detalles
                            })

                        })

                    });
                },

                onCancel: function(data) {
                    alert("Pago Cancelado");
                    console.log(data);
                }
            }).render('#paypal-button-container');
            </script>
        
    </div>

    <?php }
            } else {
    ?>
    <div class="no-files">
        <p>Este usuario no tiene contenido exclusivo</p>
    </div>

    <?php }
        } ?>


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