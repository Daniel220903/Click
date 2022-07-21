<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}
require "conexion.php";
include "functions.php";

?>

<?php

if (isset($_GET['id'])) {
    $sqlA = $mysqli->query("SELECT * FROM publicaciones WHERE id = '" . $_GET['id'] . "'");
    $rowA = $sqlA->fetch_array();

    $sqlB = $mysqli->query("SELECT * FROM users WHERE id = '" . $rowA['user'] . "'");
    $rowB = $sqlB->fetch_array();

    $reporte = $mysqli->query("INSERT INTO reporte_publicacion(publicacion,reportador,reportado,fecha) 
    VALUES('" . $_GET['id'] . "', '" . $_SESSION['id'] . "','" . $rowB['id'] . "',now())");

    if ($reporte) {
        header("Location: home.php");
    } else {
        echo "No se pudo eliminar esta publicacion, favor de intentar de nuevo";
    }
}

?>