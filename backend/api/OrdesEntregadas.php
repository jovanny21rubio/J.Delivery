<?php
include_once("../class/class-OE.php");
header("Content-Type: application/json");
switch ($_SERVER['REQUEST_METHOD']) {  
       case 'POST': //insertar un usuario
       
        break;
       case 'GET':
        OE::obtenerOrdenesEntregadas();    
          break;
        case 'PUT': 
    
        break;
    
        case 'DELETE' :
        
        break;
}






?>