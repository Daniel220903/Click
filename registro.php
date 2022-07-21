<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords"
        content="Iniciar Sesion, Siguenos:, Terminos de Privacidad, Reglas de Uso, Ayuda, ©2022&nbsp;Click">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Registrate - Click</title>
    <link rel="stylesheet" href="css/nicepage-registro.css" media="screen">
    <link rel="stylesheet" href="css/About-registro4.css" media="screen">
   <script class="u-script" type="text/javascript" src="js/jquery-index.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage-index.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "sameAs": []
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
</head>

<body data-home-page="About.html" data-home-page-title="About" class="u-body u-xl-mode">
    <section class="u-align-center u-clearfix u-gradient u-valign-middle u-section-1" id="sec-8866">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout" style="">
                <div class="u-layout-row" style="">
                    <div class="u-align-center u-container-style u-image u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-image-1"
                        src="" data-image-width="1069" data-image-height="1600">
                        <div class="u-container-layout u-valign-middle u-container-layout-1" src=""></div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-white u-layout-cell-2"
                        src="">
                        <div class="u-container-layout u-container-layout-2">
                            <?php
                            if (isset($_POST['registro'])) {

                                require("conexion.php");

                                $email = $mysqli->real_escape_string($_POST['mail']);
                                $nombre = $mysqli->real_escape_string($_POST['nombre']);
                                $usuario = $mysqli->real_escape_string($_POST['usuario']);
                                $password = md5($_POST['password']);


                                $consultausuario = "SELECT username FROM users WHERE username = '$usuario'";
                                $consultaemail = "SELECT email FROM users WHERE email = '$email'";

                                if ($resultadousuario = $mysqli->query($consultausuario));
                                $numerousuario = $resultadousuario->num_rows;

                                if ($resultadoemail = $mysqli->query($consultaemail));
                                $numeroemail = $resultadoemail->num_rows;

                                if ($numeroemail > 0) {
                                    echo "Este correo ya esta registrado, intenta con otro";
                                } elseif ($numerousuario > 0) {
                                    echo "Este usuario ya existe";
                                } else {

                                    $aleatorio = uniqid();

                                    $query = $mysqli->query("INSERT INTO users (email,name,username,password,signup_date,code) VALUES ('$email','$nombre','$usuario','$password',now(),'$aleatorio')");


                                    if ($query) {

                                        Header("Refresh: 2; URL=index.php");

                                        echo "Felicidades $usuario se ha registrado correctamente, te hemos enviado un correo de confirmacion.";

                                        // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
                                        $email_to = $email;
                                        $email_subject = "Confirma tu email de tu cuenta en Click";
                                        $email_from = "NoReply.clicksocial.online";

                                        $email_message = "Hola " . $usuario . ", para poder disfrutar de nuestro sitio web, debes confirmar tu email\n\n";
                                        $email_message .= "Ingresa el siguiente codigo para confirmar tu email\n\n";
                                        $email_message .= "Codigo: " . $aleatorio . "\n";


                                        // Ahora se envía el e-mail usando la función mail() de PHP
                                        $headers = 'From: ' . $email_from . "\r\n" .
                                            'Reply-To: ' . $email_from . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();
                                        @mail($email_to, $email_subject, $email_message, $headers);
                                    } else {

                                        echo "Ha ocurrido un error en el registro, intentelo de nuevo";
                                        header("Refresh: 2; URL=registro.php");
                                    }
                                }

                                $mysqli->close();
                            }
                            ?>
                            <img class="u-image u-image-default u-image-2" src="images/CLICK.svg" alt=""
                                data-image-width="332" data-image-height="99">
                            <p class="u-align-left u-custom-font u-font-ubuntu u-text u-text-1">Click es una plataforma
                                abierta que alberga una comunidad donde existen todo tipo de personas con todo tipo de
                                ideas y de publicaciones.</p>
                            <div class="center-outer">
                                <div class="center-inner">

                                    <div class="bubbles">
                                        <h1>Registrate</h1>
                                    </div>

                                </div>
                            </div>
                            <form action="" method="post" class="inputs-container">
                                <input class="input" type="email" placeholder="Correo electrónico" name="mail"
                                    autocomplete="off" required>
                                <input class="input" type="text" placeholder="Nombre completo" class="input"
                                    name="nombre" required>
                                <input class="input" type="text" placeholder="Usuario" class="input" name="usuario"
                                    required />
                                <input class="input" type="password" placeholder="Contraseña" class="input"
                                    name="password" required />


                                <button class="btn" type="submit" value="Entrar" name="registro" class="boton">
                                    Ingresar</button>

                            </form>
                            <p class="u-align-center u-custom-font u-font-ubuntu u-text u-text-2">¿Ya tienes Cuenta?</p>
                            <a href="https://clicksocial.online/index.php"
                                class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">¡Inicia
                                sesion!</a>
                            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="images/ayuda.png"
                                alt="" data-image-width="512" data-image-height="512">
                            <p class="u-align-left u-custom-font u-font-ubuntu u-text u-text-3">¿Que es Click?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="u-clearfix u-footer u-grey-90" id="sec-2098">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <!--position-->
                                <div data-position="" class="u-position u-position-1">
                                    <!--block-->
                                    <div class="u-block">
                                        <div class="u-block-container u-clearfix">
                                            <!--block_header-->
                                            <h5 class="u-block-header u-text">
                                                <!--block_header_content--> <a href= "reglas.php">Reglas</a>
                                                <!--/block_header_content-->
                                            </h5>
                                            <!--/block_header-->
                                            <!--block_content-->
                                            <div class="u-block-content u-text">
                                                <!--block_content_content--> Politicas de privacidad<br>
                                        Descripción de servicios<br>
                                        Políticas de censura
                                                <!--/block_content_content-->
                                            </div>
                                            <!--/block_content-->
                                        </div>
                                    </div>
                                    <!--/block-->
                                </div>
                                <!--/position-->
                            </div>
                        </div>
                        <div
                            class="u-align-center-sm u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <!--position-->
                                <div data-position="" class="u-position u-position-2">
                                    <!--block-->
                                    <div class="u-block">
                                        <div class="u-block-container u-clearfix">
                                            <!--block_header-->
                                            <h5 class="u-block-header u-text">
                                                <!--block_header_content-->             <a href= "nosotros.php">Sobre Nosotros</a>
                                                <!--/block_header_content-->
                                            </h5>
                                            <!--/block_header-->
                                            <!--block_content-->
                                            <div class="u-block-content u-text">
                                                <!--block_content_content-->            ¿Quienes somos?<br>
                                                ¿Cuales son nuestras metas?<br>
                                                ¿A que aspiramos?
                                                <!--/block_content_content-->
                                            </div>
                                            <!--/block_content-->
                                        </div>
                                    </div>
                                    <!--/block-->
                                </div>
                                <!--/position-->
                            </div>
                        </div>
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-left-md u-align-right-lg u-align-right-xl u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                            <div class="u-container-layout u-container-layout-3">
                                <div class="u-social-icons u-spacing-10 u-social-icons-1">
                                    <a class="u-social-url" title="facebook" target="_blank" href=""><span
                                            class="u-icon u-social-facebook u-social-icon u-icon-1"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-875b">
                                                </use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                                id="svg-875b">
                                                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                                <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                                            </svg></span>
                                    </a>
                                    <a class="u-social-url" title="twitter" target="_blank" href=""><span
                                            class="u-icon u-social-icon u-social-twitter u-icon-2"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c7a1">
                                                </use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                                id="svg-c7a1">
                                                <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55">
                                                </circle>
                                                <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
                                            </svg></span>
                                    </a>
                                    <a class="u-social-url" title="instagram" target="_blank" href=""><span
                                            class="u-icon u-social-icon u-social-instagram u-icon-3"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style="">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a080">
                                                </use>
                                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                                id="svg-a080">
                                                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                                <path fill="#FFFFFF"
                                                    d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
                                                </path>
                                                <path fill="#FFFFFF"
                                                    d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
                                                </path>
                                                <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                                            </svg></span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <span
        style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: linear-gradient(#e5e5e5, white); right: 20px; bottom: 20px;"
        class="u-back-to-top u-gradient u-icon u-icon-circle u-opacity u-opacity-85 u-spacing-15" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use>
        </svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13"
            xmlns="http://www.w3.org/2000/svg" id="svg-1d98">
            <path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path>
        </svg>
    </span>
</body>

</html>