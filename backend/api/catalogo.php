<?php
    // para indicar que cualquier respues que se envia con echo se  esta envia un Json 
    header("Content-Type: application/json");

    //importamos las clases 
    include_once("../class/class-catalogo.php");

    //$_SERVER['REQUEST_METHOD'] nos retorna si es Post, Get, Put, o Delete...
    switch($_SERVER['REQUEST_METHOD']){ 
        case 'POST':
            // guardamos... 
        break;

        case 'GET':
            // Obtener Catalogo/s...
            if (isset($_GET['idCatalogo'])){  
                Catalogo::obtenerCatalogo($_GET['idCatalogo']);
            }else{
                Catalogo::obtenerCatalogos();
            }
        break;
        case 'PUT':
            // 1. $_PUT para actualizar 
            // 2. Obetenemos la informacion del cleinte 
            // 3. llamamoas al metodo 
            // 4. enviamos un msj. 
            //ACTUALIZAR UN USUARIOS...

        break;
        case 'DELETE':
            Usuario::eliminarUsuarios($_GET['id']);
            // ELIMINAR UN USUARIO...
            // 1.Leemos el id que manada el usuriao con el Get 
            // 2.enviamos el areglo asociativo resultado en formato Json 
        break;
    }



?>