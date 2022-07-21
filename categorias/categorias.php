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
    <title>Home - Click</title>
    <meta charset="UTF-8">
    <meta name="description" content="Click">
    <!-- -->
    <link href="../css/home2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/lateral.css">
    <link href="../css/filtros.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../js/likes.js"></script>
    <script src="../js/favoritos.js"></script>
    <link rel="stylesheet" href="../css/categorias2.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/tooltip2.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</head>

<body>
    <?php include "headercategorias.php"; ?>
    <?php include "lateralheadercategorias.php"; ?>

    <main class="contenedor-t">
        <p>
            <a class="tooltip">
                <i class="fas fa-info-circle"></i>
                <span class="tooltip-box">Categorias:<br>
                    Descubre publicaciones de tu agrado mediante un filtro de 12 categorias, asi podras buscar un
                    contenido en especifico. </span>
            </a>
        </p>
    </main>
    <h1 class="title">Categorias</h1>

    <div class="container">

        <div class="card">
            <img src="../images/catego/deportes.jpg">
            <h4>Deportes</h4>
            <p>Futbol, Basquetbol, automovilismo<br>
            y mucho mas, descubre las ultimas noticias en deportes y opiniones de la comunidad sobre estos. </p>
            <a href="../categorias/deportes.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/musica.jpg">
            <h4>Musica</h4>
            <p>Opiniones sobre musica, nuestros artistas favoritos, experiencias en conciertos y muchas mas cosas que debes ver. </p>
            <a href="../categorias/musica.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/videojuegos.jpg">
            <h4>Videojuegos</h4>
            <p>Descubre juegos, opiniones sobre estos y las ultimas novedades en el mundo del Gaming. </p>
            <a href="../categorias/videojuegos.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/comida.jpg">
            <h4>Comida</h4>
            <p>Descubre recetas, experiencias culinarias, opiniones sobre comidas y mas cosas que te haran tener hambre.</p>
            <a href="../categorias/comida.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/educativo.jpg">
            <h4>Educativo</h4>
            <p>Cursos educativos, anecdotas escolares, tips para la vida escolar y cualquier tema relacionado con el estudio y la escuela.</p>
            <a href="../categorias/educativo.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/historia.jpg">
            <h4>Historia</h4>
            <p>Cualquier tipo de evento historico y datos que no conocias sobre estos.</p>
            <a href="../categorias/historia.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/actualidad.jpg">
            <h4>Actualidad</h4>
            <p>Opiniones, noticias o videos sobre cualquier cosa que este pasando en nuestro dia a dia.</p>
            <a href="../categorias/actualidad.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/moda.jpg">
            <h4>Moda</h4>
            <p>Lo ultimo en la moda, tips de vestimenta y muchas cosas mas para saber sobre la ropa y formas de vestir.</p>
            <a href="../categorias/moda.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/hogar.jpg">
            <h4>Hogar</h4>
            <p>Mascotas, muebles arreglo de interiores y muchas mas cosas que puedes encontrar en esta categoria.</p>
            <a href="../categorias/hogar.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/entretenimiento.jpg">
            <h4>Entretenimiento</h4>
            <p>Lo ultimo en peliculas, videojuegos, series y muchas mas cosas  que podras encontrar.</p>
            <a href="../categorias/entretenimiento.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/autos.jpg">
            <h4>Autos</h4>
            <p>Lo ultimo en automotriz, los ultimos y mejores carros, autos clasicos y mas cosas de este estilo.</p>
            <a href="../categorias/autos.php">Ver categoria</a>
        </div>

        <div class="card">
            <img src="../images/catego/ninos.jpg">
            <h4>Niños</h4>
            <p>Caricaturas, juguetes y todo tipo de cosas que son del agrado de cualquier niño pequeño</p>
            <a href="../categorias/ninos.php">Ver categoria</a>
        </div>
    </div>

</body>

</html>