<?php
 // Permite acceder a las variables de sesion
 
include_once("../class/class-PDT.php");
header("Content-Type: application/json");
switch ($_SERVER['REQUEST_METHOD']) {  
       case 'POST': //insertar un usuario
       
        break;
       case 'GET':
        PDT::obtenerPedidosTomados();    
          break;
        case 'PUT': 
    
        break;
    
        case 'DELETE' :
        
        break;
}