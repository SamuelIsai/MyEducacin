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
        <input id="buscar" class="buscar" placeholder="buscar...">
    <button id="btn" class="btn">buscar</button>
    <div id="panel" class="panel"></div>

    <script>
        // Objetos de ejemplo
// Objetos de ejemplo
var objetos = [
  { nombre: "Chat", link: "http://127.0.0.1:8000" },
  { nombre: "Acerca de", link: "" },
  { nombre: "Juego", link: "\game.html" }
];

// Función para buscar objetos
function buscarObjetos() {
  var buscar = document.getElementById("buscar").value.toLowerCase();
  var resultados = objetos.filter(function(objeto) {
    return objeto.nombre.toLowerCase().includes(buscar) || objeto.link.toLowerCase().includes(buscar);
  });

  // Mostrar los resultados en el panel
  var panel = document.getElementById("panel");
  panel.innerHTML = "";
  if (resultados.length > 0) {
    for (var i = 0; i < resultados.length; i++) {
      var objeto = resultados[i];
      var nombre = document.createElement("h3");
      nombre.textContent = objeto.nombre;
      panel.appendChild(nombre);

      var link = document.createElement("a");
      link.href = objeto.link;
      link.textContent = "Enlace";
      panel.appendChild(link);

      var separador = document.createElement("hr");
      panel.appendChild(separador);
    }
  } else {
    panel.textContent = "No se encontraron resultados.";
  }
}

// Evento click del botón de búsqueda
var btn = document.getElementById("btn");
btn.addEventListener("click", buscarObjetos);


    </script>
  
  <style>
    .buscar {
    margin-left: 50px;
    width: 500px;
    padding: 10px;
    font-size: 16px;
    border: 2px solid #ccc;
    border-radius: 5px;
    outline: none;
    }

    .btn {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    }

    .btn:hover {
    background-color: #45a049;
    }

   

    .panel {
    margin-bottom: -60px;
    margin-left: -580px;
    margin-top: 20px;
}

.panel ul {
    
    list-style: none;
    padding: 0;
    margin: 0;
}

.panel li {
    
    margin-bottom: 10px;
}

.panel h3 {
    
    margin: 0;
}

.panel a {
    
    color: #0066cc;
    text-decoration: none;
    transition: color 0.3s, text-decoration 0.3s;
}

.panel a:hover {
    
    color: #ff3366;
    text-decoration: underline;
}

  </style>

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

            <a href="http://127.0.0.1:8000">
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
