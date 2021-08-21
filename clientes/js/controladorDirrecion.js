const tilesProvider = "	https://tile.openstreetmap.org/{z}/{x}/{y}.png ";

let mapid = L.map("mapid").setView([14.313, -88.16], 13);
L.tileLayer(tilesProvider, {
  maxZoom: 18,
}).addTo(mapid);

mapid.doubleClickZoom.disable();

mapid.on("dblclick", e => {
    let latLng = mapid.mouseEventToLatLng(e.originalEvent);
    L.marker([latLng.lat, latLng.lng]).addTo(mapid);
  });


function volver(){
    location.href ="../paginas/carrito.html";
}

function pagos(){
    location.href ="../paginas/pago.html";
}

