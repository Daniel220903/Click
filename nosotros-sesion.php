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
        <meta charset="UTF-8">
    <title>Sobre nosotros - Click</title>
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="theme-color" content="#fff">
    <link rel="stylesheet" href="css/sobre_nosotros_css.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/lateral.css">
    <link href="css/filtros.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/lateral.css">
    <link rel="stylesheet" href="css/home2.css">
</head>

<body>
    <?php require "conexion.php"; ?>
    
    <!--:::::::Portada-001:::::::-->
    <div class="wrp">
        <div class="portada"></div>
        <div class="contenido">
            <div class="info">
                <h1>Sobre Nosotros</h1>
                <a href="configuracion.php">Regresar al inicio</a>
            </div>
        </div>
        <div class="curveado">
            <img src="images/img2.svg">
        </div>
    </div>

    <div class="container__card">

<div class="card c1">
    <div class="icon">
        <i class="fab fa-question"></i>
    </div>
    <div class="info__description">
     <p>Somos un grupo de programadores apasionados por el desarrollo web, los cuales buscamos problematicas en la sociedad.</p>
    </div>
</div>

<div class="card c2">
    <div class="icon">
       <i class="fa-solid fa-eye"></i>
    </div>
    <div class="info__description">
         <p>Hacer que la sociedad tenga en cuenta a "CLICK" como una de sus redes sociales más priorizadas. </p>
    </div>
</div>

<div class="card c3">
    <div class="icon">
        <i class="fa-solid fa-check"></i>
    </div>
    <div class="info__description">
        <p>Una de nuestras prioriadades es que el usuario tenga un espacio donde se sienta la libertad de compartir las ideas que deseé.</p>
    </div>
</div>



</div>

</div>


    <main>

    <article>
    <h3>¿Quienes somos?</h3>
    <p>Somos un grupo de programadores apasionados por el desarrollo web, los cuales buscamos problematicas en la sociedad y en ello encontramos una problemática muy común en todas partes del mundo, la cual es la falta de libre expresión debido a la censura, es por eso que hemos desarrollado una plataforma para que nuestros usuarios tengan un espacio donde4 puedan expresar a través de publicaciones cualquier idea, pensamiento y opinión.</p>


     <h3>Nuestra Visión</h3>
     <p>Hacer que la sociedad tenga en cuenta a "CLICK" como una de sus redes sociales más priorizadas. Dar a conocer esta red a nivel estatal para dar a más personas el poder de generar y compartir ideas e información al instante y sin obstáculos. Implementar más funciones a los usuarios para que tengan una mejor interacción tanto como con los usuarios y sus publicaciones.</p>

 

     <h3>Nuestra prioridades</h3>

     <p>Una de nuestras prioriadades es que el usuario tenga un espacio donde se sienta la libertad de compartir las ideas que deseé y se interese por observar la opinión de otras personas.</p>
     
    <p>Otra de nuestras prioridades es que se respeta el reglamento establecido en "CLICK" el cual habla sobre las restricciones que se maneja en la publicación de contenido. Y por último, que los usuarios aprovechen esta res social para hacer conocer su contenido e impulsar su crecimiento como creadores de contenido.</p>

 

     

    </article>



    </main>
    
    
</body>

</html>