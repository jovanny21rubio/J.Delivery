var empresa = [];
const url = '../../../backend/api/empresa.php';
var idPagina = null;

function obtenerEmpresa() {
    //axion Funcion tipo promesa
    axios({
        method: 'GET',      // Metodo 
        url:url,            // url de donde vamos a consumir los servicios   Rest API 
        responseType:'json' // TIPO DE LA RESPUESTA 
    }).then(res=>{          // then... se ejecuta al obtener la respuesta del servidor.  y alamcena el retorno en res. 
        console.log(res.data);  // Imprimir en la consola 
        this.empresa = res.data; // lo almacenamos en el arreglo que creamos al inicio (var usuarios = []; )
        generarEmpresa();
    }).catch(error=>{
        console.error(error);
    });
}

obtenerEmpresa();


function generarEmpresa() {
    document.querySelector('#empresa').innerHTML = '';
    for (let i = 0; i < empresa.length; i++) {
        document.querySelector('#empresa').innerHTML +=
        `
    <div class="col-6 col-sm-6 col-md-4 ">
    <div class="card  card-margin" >
        <img src="${empresa[i].imagenEmpresa}" class="card-img-top app-img" alt="..." onclick = "Abrir(${i})" >
        <div class="card-body card-body-catalogo">
          <h5 class="card-title card-title-catalogo">${empresa[i].nombreEmpresa}</h5>
        </div>
      </div>
</div>
<!-- termino -->`; 
    } 

    
}
generarEmpresa();

function Abrir(indice){
    console.log("EL indice es:"+ indice);
    idPagina = indice;
    location.href ="../paginas/productos.html";


}
function Carrito(){
    location.href ="../paginas/carrito.html";
}

function Volver(){
    location.href ="../paginas/catalogo.html";
}

