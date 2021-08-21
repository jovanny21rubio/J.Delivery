
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>J.delivery</title>
  <link rel="shortcut icon" href="img/Logo Sin fondo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ad04a83d44.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--Navbar--->
  <nav class="navbar  navbar-expand-sm  navbar-light bg-light"> 
    <div class="container" id="navbar">
      <img src="img/Logo Sin fondo.png" id="logo">
     <button type="button" class="btn btn-danger" id="cerrar" onclick="cerrarSesion()"><i class="fas fa-sign-out-alt"></i></button> 
      
    </div> 
  </nav>
  <!--Botones con la informacion de las ordenes--->
  <div class="conteiner-fluid">
    <div class="row ">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button id="boton1"  data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="MostrarPDNT()"><p id="centrado1">Pedidos Disponibles</p>  </button>
      </div>
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button id="boton2" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="MostrarPTSE()"><p id="centrado1" >Ordenes tomadas sin entregar</p> </button>
      </div>
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button id="boton3" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="MostrarPDT()"> <p id="centrado1" > Ordenes Tomadas</p> </button>
      </div>
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button id="boton4" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="MostrarOE()"> <p id="centrado1" >Ordenes Entregadas</p> </button>
      </div>
    </div>
  </div>
  </div>
  <!--fin de los botones--->

  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="Tarjetas">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="js/axios.min.js"></script>
  <script src="js/controlador.js"></script>
  <script src="js/validacion.js"></script>
</body>

</html>