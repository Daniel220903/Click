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
    <title>Administrador</title>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://kit.fontawesome.com/9f4ca44b10.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="css/perfil4.css">
    <meta name="description" content="Click">
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/perfil4.css">
</head>

<body>
     <?php
    require "conexion.php";
    $sqlAdm = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "' AND admin = 2");
    $rowAdm = $sqlAdm->fetch_array();
    if(isset($rowAdm)){ ?>
    <?php if (isset($_GET['username'])) { ?>
    <?php
        require "conexion.php";
        $sqlA = $mysqli->query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
        $rowA = $sqlA->fetch_array();
        ?>
    <div class="delete">
        <div class="back">
            <a href="administrador.php"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <form action="" method="post" class="delete__form">

            <?php if (isset($_POST['delete'])) {
                    $sqlC = $mysqli->query("SELECT * FROM users WHERE username  = '" . $GET['username'] . "'");
                    $rowC = $sqlC->fetch_array();

                    $sqlC = $mysqli->query("SELECT * FROM users WHERE id  = '" . $rowA['id'] . "'");
                    $rowC = $sqlC->fetch_array();


                    $deletearchive = $mysqli->query("DELETE FROM archivo WHERE user = '" . $rowC['id'] . "'");
                    $deletecreator = $mysqli->query("DELETE FROM creador WHERE id_creador = '" . $rowC['id'] . "' ");
                    $deletelikes = $mysqli->query("DELETE FROM likes WHERE usuario = '" . $rowC['id'] . "'");
                    $deletemessage = $mysqli->query("DELETE FROM mensajes WHERE de = '" . $rowC['id'] . "'");
                    $deletepublication = $mysqli->query("DELETE FROM publicaciones WHERE user = '" . $rowC['id'] . "'");
                    $deletefollow = $mysqli->query("DELETE FROM seguidores WHERE seguido = '" . $rowC['id'] . "'");
                    
                    $deletesuscription = $mysqli->query("DELETE FROM pago WHERE pagador = '" . $rowC['id'] . "'");
                    
                    
                    $deletelikes = $mysqli->query("DELETE FROM likes WHERE usuario = '" . $rowC['id'] . "'");
                    
                    $deletecount = $mysqli->query("DELETE FROM users WHERE id = '" . $rowC['id'] . "'");

                    if ($deletecount) {
                        header("refresh: 0; url = administrador.php");
                    }
                } ?>
            Borrar Cuenta
            <button name="delete" class="delete__button">
                <i class="bx bx-trash"></i>
            </button>
        </form>
    </div>


    <div class="h-content">
        <div class="gratuito">
            Publicaciones gratuitas
            <?php
                require "conexion.php";
                $sqlB = $mysqli->query("SELECT * FROM publicaciones WHERE user = '" . $rowA['id'] . "' AND status_pub != 'exclusivo'  AND estado != 'eliminado' ORDER BY id DESC  ");
                $totalp = $sqlB->num_rows;
                while ($rowB = $sqlB->fetch_array()) {
                    $sqlD = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '" . $rowB['id'] . "' 
                AND status != 'exclusivo' AND estado != 'eliminado' ORDER BY id desc");
                    $rowD = $sqlD->fetch_array();
                ?>

            <div class="h2-cont">
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
                            <a class="delete" href="borrar_pub.php?id=<?php echo $rowB['id'] ?>"><i
                                    class="bx bx-trash"></i></a>
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

                <div class="hl-bottom">
                    <?php if ($rowD['type'] != 'texto') { ?>
                    <strong style="color: #262626;"><?php echo $rowA['username']; ?></strong>
                    <?php echo $rowB['descripcion']; ?>
                    <?php } else {
                            } ?>
                </div>
            </div>
            <br>

            <?php } ?>
        </div>
    </div>

    <div class="h-content">
        <div class="gratuito">
            Publicaciones exclusivas
            <?php
                require "conexion.php";
                $sqlZ = $mysqli->query("SELECT * FROM publicaciones WHERE user = '" . $rowA['id'] . "' AND status_pub != 'gratuito'  AND estado != 'eliminado' ORDER BY id DESC  ");
                $totalpp = $sqlZ->num_rows;
                while ($rowZ = $sqlZ->fetch_array()) {
                    $sqlX = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '" . $rowZ['id'] . "' 
                AND status != 'gratuito' AND estado != 'eliminado' ORDER BY id desc");
                    $rowX = $sqlX->fetch_array();
                ?>
            <div class="h2-cont">
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
                            <a class="delete" href="borrar_pub.php?id=<?php echo $rowZ['id'] ?>"><i
                                    class="bx bx-trash"></i></a>
                        </div>

                    </div>
                </div>
                <div class="hl-middle">
                    <?php if ($rowX['type'] == 'imagen') { ?>
                    <img src="archivos/<?php echo $rowX['ruta']; ?>" width="100%"
                        class="<?php echo $rowX['filtro']; ?>">
                    <?php }
                            if ($rowX['type'] == 'video') { ?>
                    <video src="videoaudio/<?php echo $rowX['ruta']; ?>" width="100%" controls></video>
                    <?php }
                            if ($rowX['type'] == 'texto') {
                            ?>
                    <br>
                    <p><?php echo $rowZ['descripcion']  ?></p>
                    <br><?php } ?>
                </div>

                <div class="hl-bottom">
                    <?php if ($rowZ['type'] != 'texto') { ?>
                    <strong style="color: #262626;"><?php echo $rowA['username']; ?></strong>
                    <?php echo $rowZ['descripcion']; ?>
                    <?php } else {
                            } ?>
                </div>
            </div>
            <br>

            <?php }
            ?>
        </div>
    </div>

 
    <?php } else { ?>
    Error al buscar al usuario
    <?php } ?>
    <?php } else {
    ?>
    NO ERES ADMINISTRADOR
     <?php } 
    ?>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .delete {
        margin: 30px auto;
        text-align: center;
        width: 50%;
    }

    .delete__form {
        background-color: #0b6f72;
        color: #fff;
        font-size: 20px;
        height: 40px;
        font-family: 'Baloo 2', cursive;
        padding-top: 2px;
    }

    .back {
        text-align: left;
    }

    .delete__button {
        background-color: #DC0233;
        border: none;
        width: 30px;
        height: 30px;
        border-radius: 10px;
        cursor: pointer;
    }

    .delete_button:hover {
        background-color: #F73923;
    }
    </style>


</body>

</html>