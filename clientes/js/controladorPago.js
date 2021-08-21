var pago = [];
const url = '../../../backend/api/pago.php';
var idPagina = null;

function obtenerPago() {
    //axion Funcion tipo promesa
    axios({
        method: 'GET',      // Metodo 
        url:url,            // url de donde vamos a consumir los servicios   Rest API 
        responseType:'json' // TIPO DE LA RESPUESTA 
    }).then(res=>{          // then... se ejecuta al obtener la respuesta del servidor.  y alamcena el retorno en res. 
        console.log(res.data);  // Imprimir en la consola 
        this.empresa = res.data; // lo almacenamos en el arreglo que creamos al inicio (var usuarios = []; )
    }).catch(error=>{
        console.error(error);
    });
}

obtenerPago();

function guardar(){
    let pagoFinal = {     // agreglo con la informacion de los imput 
        // IdCliente: document.getElementById('IdCliente').value,
        NombreDeTarjeta: document.getElementById('NombreDeTarjeta').value,
        NumeroDeTarjeta: document.getElementById('NumeroDeTarjeta').value,
        FechaDeExpiracion: document.getElementById('FechaDeExpiracion').value,
        CodigodeSeguridad: document.getElementById('CodigoDeSeguridad').value,
        // totalProducto: document.getElementById('totalProducto').value
    };

    console.log('Pago a guardar', pagoFinal);

    axios({
        method: 'POST',     // metodo 
        url:url,            // url de API
        responseType:'json',        // tipo dato
        data:pagoFinal        //informacion que enviamos. que es el arreglo anterior. 
        
    }).then(res=>{
        console.log(res);
        // limpiar();
        obtenerPago();
    }).catch(error=>{
        console.error(error);
    });

    location.href ="../paginas/catalogo.html";
}

function Carrito(){
    location.href ="../paginas/carrito.html";
}

function Volver(){
    location.href ="../paginas/dirrecion.html";
}