<?php
require "conexionp.php";

$json = file_get_contents('php://input');
$datos = json_decode($json, true);

/*Este codigo es muy importante para ver los datos que quieras extraer de la consulta del pago en paypal
Acuerdate de ejecutarlo te vas ala consola y en el apartado de red buscas el script de consulta.php 
y una vez que lo abras en el submenu de respuesta tienes todos los datos estructurados del arreglo
que crea paypal de la compra donde puedes bajar correo nombre pago etc del cliente y poder usarlos en php */

/*
echo '<pre>';
print_r($datos);
echo '</pre>';
*/

if (is_array($datos)) {
    echo "Entro el primer if";
    $id_transaccion = $datos['detalles']['id'];
    $total = $datos['detalles']['purchase_units'][0]['amount']['value'];
    $status = $datos['detalles']['status'];
    $fecha = $datos['detalles']['update_time'];
    $fecha_final = date('Y-m-d H:i:s', strtotime($fecha));
    $email = $datos['detalles']['payer']['email_address'];
    $id_cliente = $datos['detalles']['payer']['payer_id'];

    $sql = $mysqli->query("INSERT INTO compra (id_transaccion,fecha,status,email,id_cliente,total) VALUES ('$id_transaccion','$fecha_final'
    ,'$status','$email','$id_cliente','$total')");

    if ($sql) {
        require "conexionp.php";
        $confir = $mysqli->query("INSERT INTO pago (user_creador,creador,user_pagador,pagador,fecha_pago,precio) VALUES('" . $_GET['creatorname'] . "','" . $_GET['creator'] . "',
        '" . $_GET['username'] . "','" . $_GET['user'] . "','$fecha_final'
        ,'$total')");



        header("refresh: 0; url = home.php");


        //$desbl = $mysqli->query("INSERT INTO pago() VALUES ()")
    }
}