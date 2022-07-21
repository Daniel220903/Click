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
    <title>Reportar </title>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://kit.fontawesome.com/9f4ca44b10.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="css/reportarusuario.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <style>
        body{
    background: rgba(0, 0, 0, 0.238);
    
}
.contendedor-inicial{
    width: 800px;
    height: 400px;
    background:blue;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    z-index: 1000;
   
}
.contendedor-inicial form h3{
    font-size: 30px;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: rgba(3, 3, 3, 0.253);
    color: black;
}
.contendedor-inicial form textarea{
  width: 700px;
  height: 200px;
  resize: none;
  margin-left: 5%;
  font-size: 20px;
  font-family: ProximaNova,system-ui;
}
.contendedor-inicial form .boton input{
    width: 100px;
    height: 35px;
    text-align: center;
    margin-left: 85%;
    margin-top: 10px;
    color: white;
    background:transparent;
    background: darkblue;
    cursor: pointer;
    
}
.contendedor-inicial form .boton input:hover{

    background: rgb(7, 151, 247);
    cursor: pointer;
    
}
.cont-img{
    display:none;
   margin-top: -61%;
   margin-left: 46%;
   animation: movimiento 2.5s linear infinite;

}
.cont-img img{
    width: 140px;
    height: 140px; 
    display: block;
   
   
  
}

@keyframes movimiento {
    0%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(30px);
    }
    100%{
        transform: translateY(0);
    }
}
.cinco-reportes{
    width: 800px;
    height: 400px;
    background:blue;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    z-index: 1000;
   
}
@media (max-width: 820px) {
    .contendedor-inicial{
        width: 750px;
        height: 400px;
     
    }
    .contendedor-inicial form textarea{
        
        margin-left: 3%;
        
      }
     
  }
  @media (max-width: 750px) {
    .contendedor-inicial{
        width: 720px;
        height: 400px;
     
    }
    .contendedor-inicial form textarea{
        
        margin-left: 1%;
        
      }
  }

  @media (max-width: 732px) {
    .contendedor-inicial{
        width: 680px;
        height: 400px;
     
    }
    .contendedor-inicial form textarea{
        width: 650px;
        margin-left: 2%;
        
      }
  }
 
  @media (max-width: 687px) {
    .contendedor-inicial{
        width: 630px;
        height: 400px;
     
    }
    .contendedor-inicial form textarea{
        width: 600px;
        margin-left: 2%;
        
      }
      .contendedor-inicial form .boton input{
        
        margin-left: 80%;
      
        
    }
    
    
  }
  @media (max-width: 634px) {
    .contendedor-inicial{
        width: 600px;
        height: 400px;
     
    }
    .contendedor-inicial form textarea{
        width: 580px;
        margin-left: 1%;
        
      }
      .contendedor-inicial form .boton input{
        
        margin-left: 80%;
      
        
    }
  }
 
  
  @media (max-width: 605px) {
    .contendedor-inicial{
        width: 500px;
        height: 400px;
     
    }
    .contendedor-inicial form textarea{
        width: 470px;
        margin-left: 2%;
        
      }
      .contendedor-inicial form .boton input{
        
        margin-left: 78%;
      
        
    }
  }
  @media (max-width: 498px) {
    .contendedor-inicial{
        width: 450px;
        height: 400px;
     
    }
    .contendedor-inicial form textarea{
        width: 425px;
        margin-left: 2%;
        
      }
      .contendedor-inicial form .boton input{
        
        margin-left: 70%;
      
        
    }
  }
  @media (max-width: 450px) {
    .contendedor-inicial{
        width: 350px;
        height: 400px;
     
    }
    .contendedor-inicial form textarea{
        width: 300px;
        margin-left: 2%;
        
      }
      .contendedor-inicial form .boton input{
        
        margin-left: 70%;
      
        
    }
  }
  @media (max-width: 450px) {
    .contendedor-inicial{
        width: 100%;
        height: 100%;
     
    }
    .contendedor-inicial form textarea{
        width: 89%;
        height: 300px;
        margin-left: 5%;
        margin-top: -2%;
        
      }
      .contendedor-inicial form .boton input{
        
        margin-left: 70%;
      
        
    }
    .contendedor-inicial form h3{
        font-size: 20px;
        margin-top: 100px;
    }
    .cont-img{
        margin-top: -130%;
        margin-left: 41%;
        animation: movimiento 2.5s linear infinite;
        display: block;
     
     }
     .cont-img img{
        width: 120px;
        height: 120px; 
        display: block;
       
       
      
    }

  }
  @media (max-width: 400px) {

     .cont-img img{
        width: 120px;
        height: 120px; 
        display: block;
       
       
      
    }
    .cont-img{
        margin-top: -150%;
        margin-left: 41%;
        animation: movimiento 2.5s linear infinite;
        display: block;
     
     }

  }
  @media (min-width: 380px) and (max-width:399px) {

   
   .cont-img{
       display: block;
       margin-top: -140%;
       margin-left: 41%;
       animation: movimiento 2.5s linear infinite;
    
   }
 }
    </style>

    <?php
    require "conexion.php";
    $sqlAAA = $mysqli->query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
    $rowAAA = $sqlAAA->fetch_array();

    $consultarep = $mysqli->query("SELECT * FROM reporte_usuario WHERE reportador = '" . $_SESSION['id'] . "' 
    AND reportado = '" . $rowAAA['id'] . "' ");
    $totalrep = $consultarep->num_rows;

    if ($totalrep < 5) {
        if (isset($_POST['reportar'])) {
            $motivo = $mysqli->real_escape_string($_POST['motivo']);
            $reporte = $mysqli->query("INSERT INTO reporte_usuario (reportado, reportador, fecha,causa_reporte) 
            VALUES ('" . $rowAAA['id'] . "', '" . $_SESSION['id'] . "', now(), '$motivo' )");
        } ?>
    <div class="back">
        <a href="perfil.php?username=<?php echo $_GET['username']; ?>"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    <div class="contendedor-inicial">
    <form action="" method="post">
        <h3>Ingresa el motivo por el cual el usuario esta siendo reportado</h3>
        <textarea  name="motivo"></textarea>
        <div class="boton">
        <input type="submit" name="reportar">
        </div>
        <div class="cont-img">
        <img src="images/reportarusrio.png" alt="" srcset="">
    </div>
        
       
    </form>
    </div>
    

    <?php } else { ?>
    

    <div class="back">
        <a href="perfil.php?username=<?php echo $_GET['username']; ?>"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
     <?php 
        echo'
        <script> 
        
        swal({
          title: "Advertencia",
          text: "Haz hecno 5 reportes, si la cuenta incumple con nuestras reglas de comunida, se le sancionaria. Gracias por su aportacion",
          type: "warning",
          icon: "warning",
          button: "Volver"
          }).then(function() {
          window.location = "home.php";
      });
        
       </script>

        
        ';
     ?>

   

    <?php } ?>



</body>

</html>