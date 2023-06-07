<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<main>
<div class="contenedor__todo">
   <div class="caja__trasera">
      <div class="caja__trasera-login">
          <h3>¿Ya tienes cuenta?</h3>
          <p>Inicia sesion para entrar a la pagina</p>
          <button id="btn__iniciar-sesion">Iniciar Sesion</button>
      </div>
      <div class="caja__trasera-Register">
          <h3>¿Aun no tienes cuenta?</h3>
          <p>Registrate para poder iniciar Sesion</p>
          <button id="btn__registrarse">Registrarse</button>
      </div>
   </div>
<!--formulario de login y Registro-->
   <div class="contenedor__login-register">
       <!--Login-->
       <form action="" class="formulario__login">
           <h2>Iniciar Sesion</h2>
           <input type="text" placeholder="Usuario">
           <input type="password" placeholder="contraseña">
           <button>Entrar</button>
       </form>
       <!--Registro-->
       <form action="" class="formulario__register">
           <h2>Registrarse</h2>
           <input type="text" placeholder="Usuario">
           <input type="password" placeholder="Contraseña">
           <button>Registrarse</button>
       </form>
   </div>
</div>
</main>

<script src="js/script.js"></script>
</body>
</html>