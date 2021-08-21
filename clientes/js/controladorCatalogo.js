var catalogo = [];
const url = '../../../backend/api/catalogo.php';
var idPagina = null;

function obtenerCatalogo() {
    //axion Funcion tipo promesa
    axios({
        method: 'GET',      // Metodo 
        url:url,            // url de donde vamos a consumir los servicios   Rest API 
        responseType:'json' // TIPO DE LA RESPUESTA 
    }).then(res=>{          // then... se ejecuta al obtener la respuesta del servidor.  y alamcena el retorno en res. 
        console.log(res.data);  // Imprimir en la consola 
        this.catalogo = res.data; // lo almacenamos en el arreglo que creamos al inicio (var usuarios = []; )
        generarCatalogo();
    }).catch(error=>{
        console.error(error);
    });
}

obtenerCatalogo();


function generarCatalogo() {
    document.querySelector('#catalogo').innerHTML = '';
    for (let i = 0; i < catalogo.length; i++) {
        document.querySelector('#catalogo').innerHTML +=
        `<div class="col-6 col-sm-6 col-md-4 ">
            <div class="card card-margin">
                <img src="${catalogo[i].imagenCatalogo}" class="card-img-top app-img" alt="..." onclick = "Abrir(${i})">
                <div class="card-body card-body-catalogo">
                <h5 class="card-title card-title-catalogo">${catalogo[i].nombreCatalogo}</h5>
                </div>
            </div>
        </div>
    <!-- termino -->`; 
    } 
}
generarCatalogo();

function Abrir(indice){
    console.log("EL indice es:"+ indice);
    idPagina = indice;
    location.href = "../paginas/empresa.html";


}

function carito(){
    location.href ="../paginas/carrito.html";
}





