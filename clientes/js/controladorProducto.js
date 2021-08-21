var producto = [];
const url = "../../../backend/api/producto.php";
const urlCarrito = "../../../backend/api/carrito.php";
var idPagina = null;
var catidadProducto = 1;

function obtenerProducto() {
  //axion Funcion tipo promesa
  axios({
    method: "GET", // Metodo
    url: url, // url de donde vamos a consumir los servicios   Rest API
    responseType: "json", // TIPO DE LA RESPUESTA
  })
    .then((res) => {
      // then... se ejecuta al obtener la respuesta del servidor.  y alamcena el retorno en res.
      console.log(res.data); // Imprimir en la consola
      this.producto = res.data; // lo almacenamos en el arreglo que creamos al inicio (var usuarios = []; )
      generarProducto();
    })
    .catch((error) => {
      console.error(error);
    });
}

obtenerProducto();

function generarProducto() {
  document.querySelector("#producto").innerHTML = "";
  for (let i = 0; i < producto.length; i++) {
    document.querySelector("#producto").innerHTML += `
    
     <!-- generar card  -->
     <div class="col-12 col-md-4 ">
         <div class="card card-catalogo" >
             <img src="${producto[i].imagenProducto}" class="card-img-top app-img card-img-productos" alt="..." onclick = "" >
             <div class="card-body card-body-catalogo-producto">
               <h5 class="card-title card-title-producto">${producto[i].nombreProducto}</h5>
             </div>
             <div class="card-body card-body-catalogo-producto">
                 <h5 class="card-title card-title-producto-2">${producto[i].txtProducto}</h5>
             </div>
             <!-- card datos inferiores -->
             <div>
                 <div class="row  card-inferior-productos ">
                     <div class="col-12 card-body card-body-catalogo-producto card-inferior-productos">
                         <div class="row  card-body-catalogo-producto card-inferior-productos">
                             <div>
                                 <span class="card-title card-title-producto-3">DESDE</span>
                                 <apan class="card-title card-title-producto-4">${producto[i].precioProducto}</apan>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 card-body card-body-catalogo-producto card-inferior-productos">
                         <div class="row card-body-catalogo-producto card-inferior-productos" >
                             <div>
                                 <apan class="card-title card-title-producto-5">CANTIDAD:</apan>
                                         <input id = "cantidadProducto ${i}"class="input-catalogo-inferior" type="number" placeholder="3" min="0" max="5"></input>
                             </div>
                             <div>
                                 <button type="button" class="btn btn-secondary  btn-catalogo-inferior">Agregar</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- termino -->
        `;
  }
}
generarProducto();

function Abrir(indice) {
  console.log("EL indice es:" + indice);
  idPagina = indice;
  location.href ="../paginas/productos.html";
}

function Carrito() {
  location.href ="../paginas/carrito.html";
}

function Volver(){
  location.href ="../paginas/empresa.html";
}
