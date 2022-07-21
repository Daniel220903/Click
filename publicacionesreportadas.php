<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: index.php");
}
require "conexion.php";
include "functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones Reportadas </title>
 
</head>
<body>
    
    <?php 
    require "conexion.php";
    
    $sqlA = $mysqli->query("SELECT * FROM reporte_publicacion");
    while($rowA = $sqlA->fetch_array()){
    $numpubs = $sqlA->num_rows;
    $valoractual = $rowA['publicacion'];
    
  
    $sqlB = $mysqli->query("SELECT * FROM reporte_publicacion WHERE publicacion = '".$valoractual."'");
    $rowB = $sqlB->fetch_array();
        $numpubss = $sqlB->num_rows;
        //echo $valoractual. "-";
        //echo $numpubss;
    require "conexion.php";
        
        $sqlC = $mysqli->query("SELECT * FROM publicaciones WHERE id = '".rowB['publicacion']."'");
        $rowC = $sqlC->fetch_array();
         
        $sqlE = $mysqli->query("SELECT * FROM users WHERE id = '".rowC['user']."'");
        $rowE = $sqlE->fetch_array();
        
    if($numpubss >= 2){
        echo "La publicacion con id".$valoractual. "tiene mas de 5 reportes";
       
    }
    

        
    }
  
    ?>    
    
</body>

</html>