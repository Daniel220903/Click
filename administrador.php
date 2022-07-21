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
    <title>Document</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="css/home2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/admin.css">
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://kit.fontawesome.com/9f4ca44b10.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>

<body>
    
    
    <a href="home.php"><i class="fa-solid fa-arrow-left"></i></a>

    <!-- FUNCIONES QUE DEBERIA DE TENES
            Ver todos los usuarios - HECHA
            Ver todas las publicaciones por usuario -- HECHA
            Ver todos los mensajes de los usuarios
            Borrar las cuentas - HECHA
            Borrar las publicaciones -- HECHA
    
     <div class="card">
        <div class="head">
            <div class="circle"></div>
            <div class="img">
                <img src="images/adminpubs.jpg" alt="">
            </div>
        </div>

        <div class="description">
            <h3>Publicaciones</h3>
            <h4>Administra las publicaciones con reportes de incumplir alguna norma realizadas por los usuarios</h4>
          
        </div>

        <div class="contact">
            <a href="publicacionesreportadas.php">Revisar</a>

        </div>
    </div>
    
    <div class="card">
        <div class="head">
            <div class="circle"></div>
            <div class="img">
                <img src="images/adminuser.png" alt="">
            </div>
        </div>

        <div class="description">
            <h3>Usuarios</h3>
            <h4>Revisa los reportes generados hacia los usuarios por otros usuarios acusados de incumplir las normas</h4>
            <h4></h4>
            <h4></h4>
            <p></p>
        </div>

        <div class="contact">
            <a href="usuariosreportados.php">Revisar</a>

        </div>
    </div>
    -->

    <?php
    require "conexion.php";
    $sqlAdm = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "' AND admin = 2");
    $rowAdm = $sqlAdm->fetch_array();
    if(isset($rowAdm)){
    require "conexion.php";
    $sqlA = $mysqli->query("SELECT * FROM users WHERE admin = 1");
    while ($rowA = $sqlA->fetch_array()) {
    ?>

    <div class="card">
        <div class="head">
            <div class="circle"></div>
            <div class="img">
                <img src="<?php echo $rowA['avatar'] ?>" alt="">
            </div>
        </div>

        <div class="description">
            <h3><?php echo $rowA['username'] ?></h3>
            <h4><?php echo $rowA['name'] ?></h4>
            <h4><?php echo $rowA['email'] ?></h4>
            <h4><?php if ($rowA['confirmed'] == 1) { ?>
                Correo electronico verificado
                <?php } else {  ?>
                Correo electronico NO verificado
                <?php } ?></h4>
            <p><?php echo $rowA['bio'] ?></p>
        </div>

        <div class="contact">
            <a href="adminpub.php?username=<?php echo $rowA['username']; ?>">Administrar</a>

        </div>
    </div>
    <?php } 
    }else { ?>
    NO ERES ADMINISTRADOR
    <?php } ?>



    <style>
    .delete {
        text-decoration: none;
        color: red;
        margin-right: 20px;
    }
    </style>



</body>

</html>