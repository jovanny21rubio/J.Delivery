var carrito = [];
const url = "../../../backend/api/carrito.php";
var idPagina = null;
var catidadProducto = 1;
var totalProducto = 0;

function obtenerCarritos() {
  //axion Funcion tipo promesa
  axios({
    method: "GET", // Metodo
    url: url, // url de donde vamos a consumir los servicios   Rest API
    responseType: "json", // TIPO DE LA RESPUESTA
  })
    .then((res) => {
      // then... se ejecuta al obtener la respuesta del servidor.  y alamcena el retorno en res.
      console.log(res.data); // Imprimir en la consola
      this.carrito = res.data; // lo almacenamos en el arreglo que creamos al inicio (var usuarios = []; )
      generarCarrito();
    })
    .catch((error) => {
      console.error(error);
    });
}

obtenerCarritos();

function guardar(){
  let carrito = {     // agreglo con la informacion de los imput 
    // codigoProducto: document.getElementById('codigoProducto').value,
    // nombreProducto: document.getElementById('nombreProducto').value,
    // txtProducto: document.getElementById('txtProducto').value,
    // precioProducto: document.getElementById('precioProducto').value,
    cantidadProducto: document.getElementById('cantidadProducto').value,
    // totalProducto: document.getElementById('totalProducto').value
  };

  console.log('Pago a guardar', carrito);

  axios({
      method: 'POST',     // metodo 
      url:url,            // url de API
      responseType:'json',        // tipo dato
      data:pagoFinal        //informacion que enviamos. que es el arreglo anterior. 
      
  }).then(res=>{
      console.log(res);
      // limpiar();
      obtenerCarritos();
  }).catch(error=>{
      console.error(error);
  });
  
}

function generarCarrito() {
  document.querySelector("#carrito ").innerHTML = "";
  let total = 200;
  for (let i = 0; i < carrito.length; i++) {
    document.querySelector("#carrito").innerHTML += `
      <!-- Generar  -->
     <tr>
       <th scope="row " class="table-td-carrito" style="">
           <img src="../img/icon-basura.png" alt="" onclick = "eliminar(${i})">
       </th>
       <td class="table-td-carrito td-1" style="width: 50%;">
           <apan class="card-title card-title-carrito-1">${carrito[i].nombreProducto}</apan>
       </td>
       <td class="table-td-carrito td-2" style="width: 35%;">
           <input id = "cantidad${i}" class="input-carrito" type="number" placeholder="${carrito[i].cantidadProducto}"min="0" max="5" onclick = "total(${i})">
       </td>
       <td class="table-td-carrito td-3" style = "width: 15%;">
           <apan class="card-title card-title-carrito-1">${carrito[i].precioProducto}</apan>
       </td> 
     </tr>
     <!-- termina de generar  -->`;
  }
  document.querySelector("#carrito-pie ").innerHTML = `
  <tr>
  <th class="card-title-carrito-1" scope="row" colspan="3">Total</th>
  <td id "totalProducto" class="card-title-carrito-1 td-4" >${total} Lmp</td>
    </tr>`;
}
generarCarrito();

function total(i){
    // guardamos el indice  en la vriable var para reutilizarlo
    let indice = i;
    //vamos a traer los datos del con el metodo Get
    axios({
        method: 'GET',      
        url:url + `?id=${indice}`,
        responseType:'json',
        
    }).then(res=>{
        console.log(res);
        // accinamos lo que el servidor nos envio. 
        document.getElementById(`cantidad${indice}`).value=res.data.cantidadProducto;
        document.getElementById(`totalProducto${indice}`).value=res.data.totalProducto;
    }).catch(error=>{
        console.error(error);
    });
    // console.log('Seleccion'+ indice);
    
}


function volver() {
  location.href = "../paginas/catalogo.html";
}

function eliminar(id) {}

function comprar(){
  location.href = "../paginas/dirrecion.html";
}
