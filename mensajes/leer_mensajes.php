<?php
session_start();
if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
    header("Location: ../index.php");
}
require "../conexion.php";
include "../functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Leer mensajes</title>
</head>

<body>

    <style>
 

.btn-msj {
margin-top: 20px;

   
}


.btn-msj  a{
    text-decoration: none;
    border-radius: 3px;
    padding: 8px 8px;
    font-size: 15px;
    color: white;
    background-color: #950808;
    border-radius: 10px;
    cursor: pointer;
    font-weight: normal;
    margin-left: 10px;
    top: 20px;
}
.btn-msj a:hover{
    background:#ff0000;

}

.contenedor2{
margin-top:10px;
 border-radius: 10px;
 border-color:#201f39;
 border-style: solid;
 border-width:2px;
 width: 90%;
 height: 350PX;
 box-shadow: 0px 14px 32px 0px rgba(0,0,0,0.5);/*La opacidad*/
box-sizing: border-box;
position: absolute;
            top: 50%;
left: 50%;
 transform: translate(-50%, -50%);
}
.titulo{
font-weight:bold;
border-color: #201f39;
border-style: solid;
height: 35px;


}
.titulo h2{
    margin-left: 20px;
    font-size:20px;
    margin-top: 10px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-style: bold;
    text-decoration:double
    
 }
 .contenido p{
     margin-left: 20px;
     margin-top: 15px;
     font-size: 20px;
     color: #282828;
     border-spacing: 0;
     font-weight:200px;
     line-height: 22px;


 }

  @media (max-height: 516px ) {
    .btn-msj{
        margin-top: 10px;
    }
    .contenedor2{
       margin-top: 50px;
    }

  }
  @media (max-width: 450px ) {
   
    .contenedor2{
       margin-top: -3%;
       height:550px

    }

  }
  @media (max-width: 501px ) and (min-height: 688px) {

    .contenedor2{
       margin-top: 12%;
       height:530px

    }
    .titulo h2{
      font-size: 15px;
    }
    .contenido p{
        margin-left: 20px;
        margin-top: 20px;
        font-size: 15px;
        color: #282828;
        border-spacing: 0;
        font-weight:200px;
     }
    }
    @media (max-width: 400px )  {
        .btn-msj{
        margin-top: 5px;
        }
        .contenedor2{
        margin-top: 17%;
        height:520px
 
        }
        .contenido p{
         font-size: 15px;
        }
    }


    </style>


    
  <div class="container-msj">
    
   <div class="btn-msj">
    <a href="mensajes_recibidos.php">Regresar a la bandeja </a>
   </div>
    


    <?php
    require "../conexion.php";
    

    if (isset($_GET['id'])) {

      

        $query = $mysqli->query("SELECT * FROM mensajes WHERE id_msj = '" . $_GET['id'] . "'");
        $row = mysqli_fetch_array($query);

        $actualizar = $mysqli->query("UPDATE mensajes SET leido = '0' WHERE id_msj = '" . $_GET['id'] . "'");
        
    ?>
    <br><br>
   <div class="contenedor2">
    <div class="titulo">
   <h2> Asunto: </h><?php echo  $row['titulo'] ; ?>
    <br><br>
    </div>
    <div class="contenido">
    <p> <?php echo $row['mensaje']; ?></p>
    <br><br>
    </div>
    <?php } ?>

    </div>

</body>

</html>