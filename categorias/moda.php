<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}

include "../functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moda - Click</title>
    <link href="../css/filtros.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../js/likes.js"></script>
    <script src="../js/favoritos.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/home2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/lateral.css">
</head>

<body>

    <?php include "headercategorias.php"; ?>
    <?php include "lateralheadercategorias.php"; ?>

    <?php
    require "../conexion.php";

    $sqlA = $mysqli->query("SELECT * FROM publicaciones WHERE status_pub != 'exclusivo' AND categoria_pub = 'moda' AND estado = 'normal' ORDER BY id DESC");
    while ($rowA = $sqlA->fetch_array()) {
        $sqlB = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowA['user'] . "'");
        $rowB = $sqlB->fetch_array();
        $sqlC = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '" . $rowA['id'] . "' AND status != 'exclusivo'");
        $rowC = $sqlC->fetch_array();

        $countLikes = $mysqli->query("SELECT * FROM likes WHERE usuario = '" . $_SESSION['id'] . "' AND post = '" . $rowA['id'] . "'");
        $cLikes = $countLikes->num_rows;

    ?>
    <br><br>
    <div class="h2-cont">
        <div class="hl-top">
            <div class="hl-profile">
                <div class="hl-pic"><a href="../perfil.php?username=<?php echo $rowB['username']; ?>"><img
                            src="../<?php echo $rowB['avatar']; ?>" width="50" height="50"></a></div>
            </div>
            <div class="hl-username">
                <div class="hl-name"><a
                        href="../perfil.php?username=<?php echo $rowB['username']; ?>"><?php echo $rowB['username']; ?></a>
                </div>
                <div class="hl-location">Ubicacion
                    <?php
                        if ($rowA['user'] == $_SESSION['id']) {
                        ?>
                    <a href="borrar_pub.php?id=<?php echo $rowA['id'] ?>"><img src="../images/icons/deletepub.png"
                            width="30" height="30"></a></b>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="hl-middle">
            <?php if ($rowA['type'] == 'imagen') { ?>
            <img src="../archivos/<?php echo $rowC['ruta']; ?>" width="100%" class="<?php echo $rowC['filtro']; ?>">
            <?php }
                if ($rowA['type'] == 'video') { ?>
            <video src="../videoaudio/<?php echo $rowC['ruta']; ?>" width="100%" controls></video>
            <?php }
                if ($rowA['type'] == 'texto') {
                ?>
            <br>
            <p><?php echo $rowA['descripcion']  ?></p>
            <br>
            <?php } ?>
        </div>
       
        <div class="hl-bottom">
            <?php if ($rowA['type'] != 'texto') { ?>
            <strong style="color: #262626;"><?php echo $rowB['username']; ?></strong>
            <?php echo $rowA['descripcion']; ?>
            <?php } else {
                } ?>
        </div>
    </div>

    <?php } ?>

    <br>
    <style>
    .h2-cont {
        background-color: #FFF;
        width: 80%;
        margin-bottom: 4.063rem;
        border: 1px solid #E6E6E6;
        padding: 1rem 0.8rem;
        border-radius: 1rem;
        margin: auto;
    }
    </style>

</body>

</html>