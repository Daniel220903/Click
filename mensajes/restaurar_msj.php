<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}
require "../conexion.php";
include "../functions.php";

?>
<?php

if (isset($_GET['id'])) {
    $query = $mysqli->query("UPDATE mensajes SET estado  = 'normal' WHERE id_msj = '" . $_GET['id'] . "'");
    if ($query) {
        header("Location: mensajes_borrados.php");
    } else {
        echo "No se pudo eliminar la imagen";
    }
}
?>