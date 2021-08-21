<?php
    // para indicar que cualquier respues que se envia con echo se  esta envia un Json 
    header("Content-Type: application/json");

    //importamos las clases 
    include_once("../class/class-carrito.php");

    //$_SERVER['REQUEST_METHOD'] nos retorna si es Post, Get, Put, o Delete...
    switch($_SERVER['REQUEST_METHOD']){ 
        case 'POST':
            // guardamos... 
            $_POST = json_decode(file_get_contents('php://input'),true);
            $carrito = new Carrito($_POST["codigoProducto"], $_POST["nombreProducto"], $_POST["txtProducto"], $_POST["precioProducto"],$_POST["cantidadProducto"],$_POST["totalProducto"]);
            // parte 3..........
            // ya obtenidos los datos mandamos a llamar el metodo guardar
            $carrito->guardarCarrito();
            // creamos un arrglo asociativo llamado resultado.... 
            $resultado["mensaje"] = "Guardar Carrito, informacion:". json_encode($_POST);
            // enviamos el areglo asociativo resultado en formato Json 
            echo json_encode($resultado);
        break;

        case 'GET':
            // Obtener carrito/s...
            if (isset($_GET['idcarrito'])){  
                Carrito::obtenerCarrito($_GET['idcarrito']);
            }else{
                Carrito::obtenerCarritos();
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