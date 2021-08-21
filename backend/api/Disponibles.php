<?php
include_once("../class/class-PDNT.php");
header("Content-Type: application/json");
switch ($_SERVER['REQUEST_METHOD']) {  
       case 'POST': //insertar un usuario
       
        break;
       case 'GET':
        PDNT::obtenerPedidosDisponiblesNoTomados();    
          break;
        case 'PUT': 
    
        break;
    
        case 'DELETE' :
        
        break;
}






?>