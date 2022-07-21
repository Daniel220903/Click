<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: ../index.php");
}
require "../conexion.php";
include "../functions.php";

?>

<?php

if (isset($_GET['id'])) {
    $query = $mysqli->query("UPDATE publicaciones SET estado = 'eliminado' WHERE id = '" . $_GET['id'] . "'");
    $queryp = $mysqli->query("UPDATE archivos SET estado = 'eliminado' WHERE publicacion = '" . $_GET['id'] . "'");
    if ($query) {
        header("Location: ../home.php");
    } else {
        echo "No se pudo eliminar esta publicacion, favor de intentar de nuevo";
    }
}


?>