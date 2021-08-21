<?php
include_once("../class/class-PTSE.php");
header("Content-Type: application/json");
switch ($_SERVER['REQUEST_METHOD']) {  
       case 'POST': //insertar un usuario
       
        break;
       case 'GET':
        SinEntrega::TomadosSinEntrega();
          break;
        case 'PUT': 
    
        break;
    
        case 'DELETE' :
        
        break;
}

?>