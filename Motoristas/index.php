
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoristas</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/Logo Sin fondo.png" type="image/x-icon">
</head>
<body>
     <div id="contenido">
         <div class="container-fluid" style="background-color:#d9d8d8;">
            <img src="img/Logo Sin fondo.png" id="logo"><h5 class="motorista"> Registro Motoristas</h5>
            <section  class="formulario-motorista">   
             <input class="control" type="text"     name="Nombre"            id="nombre"            placeholder="Nombre"><br>
             <div class="invalid-feedback">Campo inválido.</div>
             <input class="control" type="text"     name="Apellido"          id="apellido"          placeholder="Apellido"><br>
             <div class="invalid-feedback">Campo inválido.</div>
             <input class="control" type="text"     name="NombreUsuario"     id="NombreUsuario"     placeholder="Nombre Usuario"><br>
             <div class="invalid-feedback">Campo inválido.</div>
             <input class="control" type="email"    name="CorreoElectronico" id="CorreoElectronico" placeholder="Correo Electronico"><br>
             <div class="invalid-feedback" id="feedbackCorreoInvalido">Campo inválido.</div>
             <input class="control" type="password" name="Contrasena"        id="Contrasena"        placeholder="Contraseña"><br>
             <div class="invalid-feedback">Campo inválido.</div>
             <input class="btn"     type="file"     name="Archivo"           id="imagen"> 
                <br>
                <div class="d-flex justify-content-start">
             <button class="btn-dark" id="boton" onclick="guardar()" >Registrar</button>   
            </div>  
            <a href="login.php">¿Ya tienes una cuenta?, inacia sesion aqui</a>
            <br>
            <a href="../clientes/index.html"> Regresar a la pagina Principal </a>
            </section>
         </div>

     </div>
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script src="js/axios.min.js"></script>
     <script src="js/controlador.js"></script>
     <script src="js/validacion.js"></script>
</body>
</html>