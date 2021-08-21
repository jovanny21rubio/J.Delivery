var catalogo = [];
//localStorage
// obtenemos la referencia a la tecnologia de localStorage
var localStorage = window.localStorage;
if (localStorage.getItem('catalogo') == null) {
    // guarda en localStorage convirtiendo el JSON a cadena 
    localStorage.setItem('catalogo', JSON.stringify(catalogo));
}else{
    catalogo = JSON.parse(localStorage.getItem('catalogo'));
}


//modal catalogo
// generamos la lista de imagenes 
for (let i = 1; i < 10; i++) {
    document.getElementById('list-img-catalogo').innerHTML +=
`<option value="/clientes/img/catalogo ${i}.jpg">Imagen ${i}</option>`;
    
}

// catalogo 
function generarCatalogo() {
    // Limpiamos codigo html
    document.getElementById('catalogo').innerHTML =' ';
    // generamos el codigo html
    catalogo.forEach(function(cata){
        document.getElementById('catalogo').innerHTML +=
    `    <div class="col-6 col-sm-6 col-md-4 ">
            <div class="card card-catalogo" >
                <img src="${cata.urlImage}" class="card-img-top app-img" alt="..." onclick = "" >
                <div class="card-body card-body-catalogo">
                  <h5 class="card-title card-title-catalogo">${cata.nombre}</h5>
                  <button type="button" class="btn btn-secondary  btn-catalogo-Eliminar">Eliminar</button>
                </div>
            </div>
        </div>
        <!-- termino -->`;
        
    });
    
}
generarCatalogo();

//Administracion de catalogo 
//guandar la informacion por medio del id en el JSON
function guardarCatalogo() {
    //Obtener Datos para catalogo
const cat = {
        nombre:   document.getElementById('nombre-catalogo').value,
        urlImage: document.getElementById('list-img-catalogo').value,
    }
    //Imprimir en consola el objeto
    //agregamos el Objeto
    //Guardamos en local Storage
    //Imprimir en consola el JSON
    //ocultamos la ventana modal 
    console.log(cat);
    catalogo.push(cat);
    localStorage.setItem('catalogo', JSON.stringify(catalogo));
    console.log(catalogo);
    generarCatalogo();
    $('#modalNuevoCat').modal('hide');
    
}

