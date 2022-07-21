<?php

$mysqli = new mysqli("localhost:3306", "clik012e_CESARDANIEL", "Cesardiosdelawa123", "clik012e_click");

if ($mysqli->connect_errno) {
	echo "la conexion a la base de datos no se ha logrado ";
}

return $mysqli;