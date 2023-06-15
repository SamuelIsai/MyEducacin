<?php
include "../private/Config.php"; // Importanto la BD//

session_start(); // Iniciar sesión//

// Comprueba si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera los datos del formulario
  $correo = $_POST['correo'];
  $password = $_POST['password'];

  if (!empty($correo) && !empty($password)) {
      // Iniciar sesión exitosamente, redireccionar a la página deseada
      header('Location: homepage.php');
      exit();
  } else {
      $error = "Correo o contraseña incorrectos";
  }
}

?>

<!DOCTYPE html>
<body>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"
    ></script>
    <link href="https://fonts.googleapis.com/css?family=Comic+Sans+MS" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/login.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="wave" style="height: 721px; overflow: hidden;" ><svg class="wave" viewBox="0 0 500 150" preserveAspectRatio="none" 
        style="height: 100%; width: 100%;"><path d="M159.37,-2.66 C115.35,75.09 199.99,70.16 155.42,153.83 L-0.00,149.60 L-0.00,-0.00 Z" 
        style="stroke: none; fill: #08f;"></path></svg>
      <div class="forms-container">
        <div class="signin-signup">
        <form action="#" class="sign-in-form" method="post">
        <h2 class="title">Iniciar sesión</h2>
        
        <?php if (isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>

        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Correo" name="correo" />
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" name="password" />
        </div>
        <a class="recuperar" href="#">¿Haz olvidado la contraseña?</a>
        
        <input type="submit" value="Iniciar Sesión" class="iniciar_sesion transparent"  style="border-radius: 50px; cursor:pointer;"/>
        
        <img class="image" src="../recursos/img/niñofinance_low (1).png" alt="">
        </form >

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Eres nuevo?</h3>
            <p>
              ¡No te quedes afuera de la diversión! Regístrate ahora y descubre todo lo que tenemos para ti.
            </p>
            <a href="../templates/registar.php" style="display: inline-block;
            padding: 10px 20px;
            background-color: #155acb;
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            border: none;" class="boton-registro">Registrarme</a>
            <!--<div class="iconos a">
              <div style="margin-top: 30px; margin-left: 210px;" class="circul-g"></div>
              <div class="boton_g">
                  <img src="../recursos/img/icon_google.svg" alt="">
                  <span>Google</span>
              </div>
          </div>-->
          </div>
        </div>
    </div>

  </body>
</html>
</body>
</html>