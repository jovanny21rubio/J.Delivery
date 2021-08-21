<?php
  session_start();
  if (isset( $_SESSION["Motorista_correo"] )) {
    header("Location: home.php");
    sleep(4);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="shortcut icon" href="img/Logo Sin fondo.png" type="image/x-icon">
</head>
<body>
    <div id="contenido">
        <div class="container-fluid" style="background-color:#d9d8d8;">
           <img src="img/Logo Sin fondo.png" id="logo"><h5 class="motorista"> Registro Motoristas</h5>
           <section  class="formulario-motorista"  >   
               <input class="control" type="email" name="Correo Electronico" id="correo" placeholder="Correo Electronico"><br>
               
               <input class="control" type="password" name="Contrasena" id="contrasena" placeholder="Contraseña"><br>
               
               <br>
               <div class="d-flex justify-content-start">
               <button class="btn-dark" id="iniciar" onclick="iniciarSesion()" type="button" >Iniciar sesion </button>        
           </div>  
           <br>
           <a href="index.php">¿Se te ha olvidado la Contrasena?</a> 
           <br>
           
           </section>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script src="js/axios.min.js"></script>
     <script src="js/controlador.js"></script>
     <script src="js/validacion.js"></script>

</body>
</html>