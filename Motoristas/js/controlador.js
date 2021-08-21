const URL_motorista = '../../backend/api/Motoristas.php';
const URL_OE= '../../backend/api/OrdesEntregadas.php';
const URL_PDNT='../../backend/api/Disponibles.php' ;
const URL_PDT= '../../backend/api/PedidosTomado.php';
const URL_PTSE ='../../backend/api/TomadosSE.php'; 

function obtenerMotoristas(){
    axios({
        method: 'GET',
        url: URL_motorista,
        responseType:'json'
    }).then(res=>{
            console.log(res.data);
            
    }).catch(error=>{
        console.error(error);
    });
  
}
//obtenerMotoristas();

function guardar(){
    document.getElementById('boton').disabled =false;
    
    let validacionNombre = validarCampoVacio("nombre");
    let validacionApellido = validarCampoVacio("apellido");
    let validacionNombreUsuario= validarCampoVacio("NombreUsuario");
    let validacionCorreo = validarCampoVacio("CorreoElectronico");
    let validacionCotrasena = validarCampoVacio("Contrasena");

    if(validacionNombre&&validacionApellido&&validacionNombreUsuario&&validacionCorreo&&validacionCotrasena){
      let Motoristas ={
        Nombre:document.getElementById("nombre").value,
        Apellido:document.getElementById("apellido").value,
        NombreUsuario:    document.getElementById("NombreUsuario").value,
        Correo:document.getElementById("CorreoElectronico").value,
        Contrasena:       document.getElementById("Contrasena").value,
        imagen : document.getElementById('imagen').value
        };    
    
    axios({
        method:'POST',
        url:URL_motorista,
        responseType:'json',
        data: Motoristas
      }).then(res=>{
          console.log(res.data);         
          window.location= "home.php";
          document.getElementById('boton').disabled=false;
          document.getElementById('boton').innerHTML = `Guardando.....`;
          document.getElementById('boton').innerHTML=`guardado`;
          
    
        }).catch(error=>{
          console.error(error);
      });

    console.log('usuario a guardar,', Motoristas);
    }else{
      window.alert('campos del formulario vacios ')
    }
    
    
       
}

function iniciarSesion(){
    
 document.getElementById('iniciar').disabled= true;
 let validacionCampo = validarCampoVacio("correo");
 let validdacionCampo1 =validarCampoVacio("contrasena");
 let validacionCorreo = validarRegex("correo","email");
 let validacionCotrasena = validarCampoVacio("contrasena","password");
 if(validacionCorreo&&validacionCotrasena&&validacionCampo&&validdacionCampo1){
 let parametroUsuario = "correo=" + document.getElementById("correo").value+"&"+ 
                        "contrasena="+document.getElementById("contrasena"),value;
  axios({
  method:'GET',
  url: URL_motorista +"?"+parametroUsuario,
  responseType:'json'
  }).then(res=>{
    console.log(res.data);
    if(res.data==1){
      
        addValid("correo");
        addValid("contrasena");
        document.getElementById("iniciar").disabled=true;
      
    }else{
        addInvalid("correo");
       addInvalid("contrasena");
     document.getElementById("iniciar").disabled= false;
    }
    window.location = "home.php";
    }).catch(error=>{
    console.log(error);
    document.getElementById("iniciar").disabled= false;
  });

 }else{
     document.getElementById("iniciar").disabled=false;
 }
 
}

function MostrarPDNT(){
  document.getElementById("exampleModalLabel").innerHTML= `Pedidos Disponibles`;
 console.log('se muestra los pedidos disponibles');
  axios({
   method:'GET',
   url: URL_PDNT,
   responseType:'json',
  }).then(res=>{
   document.getElementById('Tarjetas').innerHTML = "";
    for (let i = 0; i < res.data.length; i++) {
      document.getElementById('Tarjetas').innerHTML +=`
      
  <div class="card" >
  <img src="img/Disponibles/${res.data[i].imagen}" alt="${res.data[i].idCompra}">
  <div class="card-body" id="estilos">
    <h5 class="card-title">${"Nombre del Pedido:" + res.data[i].NombrePedido}</h5>
    <p class="card-text">${"Direccion de Entrega: "+ res.data[i].direccionEntrega} </p>
    <p class="card-text">${"Restaurante:"+ res.data[i].Restaurante} </p>
    <p class="card-text">${"Numero del cliente:"+ res.data[i].numeroCliente} </p>
  </div>  
</div>
<br>
      `
    }

  }).catch(error=>{
    console.log(error);
  })

}


function MostrarPTSE(){
 console.log("Se imprimen los Pedidos Tomados sin Entregar");
 document.getElementById("exampleModalLabel").innerHTML= `Pedidos Tomados sin entregar`;
 axios({
  method:'GET',
  url: URL_PTSE,
  responseType:'json',
 }).then(res=>{
  document.getElementById('Tarjetas').innerHTML = "";
   for (let i = 0; i < res.data.length; i++) {
     document.getElementById('Tarjetas').innerHTML +=`
     
 <div class="card" >
 <img src="img/PTSE/${res.data[i].imagen}" alt="${res.data[i].idCompra}">
 <div class="card-body" id="estilos">
   <h5 class="card-title">${"Nombre del Pedido:" + res.data[i].NombrePedido}</h5>
   <p class="card-text">${"Nombre del local: "+ res.data[i].Nombrelocal} </p>
   <p class="card-text">${"Cantidad del pedido:"+ res.data[i].Cantidad} </p>
 </div>  
</div>
<br>
     `
   }

 }).catch(error=>{
   console.log(error);
 });
  
}

function   MostrarPDT(){ 
console.log('se muestran los pedidos tomados ');
document.getElementById("exampleModalLabel").innerHTML=`Pedidos Tomados`;
axios({
  method:'GET',
  url: URL_PDT,
  responseType:'json',
 }).then(res=>{
  document.getElementById('Tarjetas').innerHTML = "";
   for (let i = 0; i < res.data.length; i++) {
     document.getElementById('Tarjetas').innerHTML +=`
     
 <div class="card" >
 <img src="img/PedidosTomados/${res.data[i].imagen}" alt="${res.data[i].idCompra}">
 <div class="card-body" id="estilos">
   <h5 class="card-title">${"Nombre del Pedido:" + res.data[i].NombrePedido}</h5>
   <p class="card-text">${"Direccion de entrega: "+ res.data[i].direccionEntrega} </p>
   <p class="card-text">${"Nombre del local: "+ res.data[i].Restaurante} </p>
   <p class="card-text">${"Numero del cliente:"+ res.data[i].numeroCliente} </p>
 </div>  
</div>
<br>
     `
   }

 }).catch(error=>{
   console.log(error);
 });

}

function MostrarOE(){
  console.log('Presenta las Ordenes Entregadas');
  document.getElementById("exampleModalLabel").innerHTML=`Ordenes Entregadas`;
  axios({
    method:'GET',
    url: URL_OE,
    responseType:'json',
   }).then(res=>{
    document.getElementById('Tarjetas').innerHTML = "";
     for (let i = 0; i < res.data.length; i++) {
       document.getElementById('Tarjetas').innerHTML +=`
       
   <div class="card" >
   <img src="img/OrdenesEntregadas/${res.data[i].imagen}" alt="${res.data[i].idCompra}">
   <div class="card-body" id="estilos">
     <h5 class="card-title">${"Nombre del Pedido:" + res.data[i].NombrePedido}</h5>
     <p class="card-text">${"Direccion de entrega: "+ res.data[i].direccionEntrega} </p>
   </div>  
  </div>
  <br>
       `
     }
  
   }).catch(error=>{
     console.log(error);
   });
  
 }

function cerrarSesion(){
 window.location= 'login.php';

}


 