<?php
// Archivo de configuración de la base de datos (Config.php) y otras configuraciones necesarias
include "../private/Config.php";

// Iniciar sesión
session_start();

// Verificar si se ha hecho clic en el enlace "Cerrar Sesión"
if (isset($_GET['logout'])) {
    // Cerrar sesión
    cerrarSesion();
    // Redireccionar a la página de inicio de sesión u otra página deseada
    redirigir("login.php");
    exit();
}

// Función para cerrar la sesión
function cerrarSesion() {
    // Limpiar todas las variables de sesión
    $_SESSION = array();
    // Destruir la sesión
    session_destroy();
}

// Función para redireccionar a una página específica
$url = "http://localhost:8080/MyEducacin/MyEducacin/templates/login.php";

function redirigir($url) {
    header("Location: $url");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Educacin</title>
    <link href="https://fonts.googleapis.com/css?family=Comic+Sans+MS" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/estilos.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <style>
        .button-container {
            position: relative;
            text-align: right;
            margin-top: 20px;
            bottom: 500px;
            right: 200px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3c1053;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <span href="index.php" style="margin-left: 60px; font-size: 30px; font-family:bold; cursor:pointer;">MyEducacin</span>
    </header>

    <div class="menu__side" id="menu_side" style="background: #3c1053;">
        <div class="name__page">
            <i class="fa-solid fa-book"></i>
            <h3>My Educacin</h3>
        </div>

        <div class="options__menu">	
            <a href="#">
                <div class="option">
                    <i title="Ayuda"></i>
                    <h4>Ayuda</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i title="chat"></i>
                    <h4>Chat</h4>
                </div>
            </a>

            <a href="?logout=1">
                <div class="option">
                    <i title="Cerrar Sesión"></i>
                    <h4>Cerrar Sesión</h4>
                </div>
            </a>
        </div>
    </div>

    <main>
        <h1>Educación Financiera Infantil</h1><br>
        <p></p> <br>

        <p style="font-size: 20px; text-align: justify; word-spacing: -0.1em;">
             El aprendizaje desde niños es más enriquecedor cuando es constante. Esto es lo que ocurre con la Educación Financiera, un concepto que abarca <br> diferentes aspectos de la vida y que si es enseñado desde temprana edad, preparará a los más pequeños para tomar mejores decisiones en el futuro.
        </p>
    </main>

    <div class="video-container">
        <iframe style="position: absolute; top: 0; left: 0; width: 600px; height: 400px;" width="400" height="225" src="https://www.youtube.com/embed/wjYQS_h2WME" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="video-container-2" style="margin-top:-400px;">
        <iframe style="width: 600px; height: 400px;" width="400" height="225" src="https://www.youtube.com/embed/gl37c399tJQ" frameborder="0" allowfullscreen></iframe>
    </div>


    <div class="button-container">
        <h3>Entra al juego y aprende</h3>
        <br>
        <button class="button" onclick="window.location.href = 'game.html';">Comienza ya!</button>
    </div>

    <script src="../recursos/scriptmenu.js"></script>
</body>
</html>
