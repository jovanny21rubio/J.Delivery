<?php

    class Carrito{
        private $codigoProducto;
        private $nombreProducto;
        private $txtProducto;
        private $precioProducto;
        private $cantidadProducto;
        private $totalProducto;

        public function __construct(
            $codigoProducto,
            $nombreProducto,
            $txtProducto,
            $precioProducto,
            $cantidadProducto,
            $totalProducto
        ) {
            $this->codigoProducto =  $codigoProducto;
            $this->nombreProducto =  $nombreProducto;
            $this->txtProducto =  $txtProducto;
            $this->precioProducto =  $precioProducto;
            $this->cantidadProducto =  $cantidadProducto;
            $this->totalProducto =  $totalProducto;

        }

        public function guardarCarrito(){
                // 1. leemos el archivo Json
                // 2. convertimos el archivo Json a Asocitivo
                // 3. Escribimos en el agregro asociativo
                // 4. Sustituimos en el archivo Json con la nueva informacion
                // 5.escribimos el archivo
                // 6. cerramos el flujo 
                // Parte 1..........
                //LEER EL ARCHIVO
                $contenidoArchivo = file_get_contents("../data/carrito.json");
                // Parte 2..........
                // convertimos la cadena Json a un Areglo asociativo
                $carritos = json_decode($contenidoArchivo,true);
                // Parte 3..........
                // Agregamos el nuevo elemento 
                $carritos[] = array(
                        "codigoProducto" => $this->codigoProducto,
                        "nombreProducto" => $this->nombreProducto,
                        "txtProducto" => $this->txtProducto,
                        "precioProducto" => $this->precioProducto,
                        "cantidadProducto" => $this->cantidadProducto,
                        "totalProducto" => $this->totalProducto
                    
                );
                // Parte 4..........
                //sustituimos todo nuestro areglo
                //Abrimos el archivo...
                $archivo = fopen("../data/carritos.json","w"); // W sustituye todo
                // Parte 5.......... 
                //Escribir el archivo..
                fwrite($archivo, json_encode($carritos));
                // Parte 6..........
                //CERRAMOS EL FLUJO DEL ARCHIVO...
                fclose($archivo);
                }
        public static function  obtenerCarritos() {
                // 1. leer todo el archivo
                // 2. Enviar la informacion
                $contenidoArchivo = file_get_contents("../data/carrito.json");
                echo $contenidoArchivo;

        }
        public static function obtenerCarrito($indice){ // funcion tipo Static

                // 1. leer todo el archivo
                // 2. lo convertimos
                // 3. retornamos el Json 

                // Parte 1..........
                //leer todo el archivo
                $contenidoArchivo = file_get_contents("../data/carritos.json");
                // Parte 2..........
                //lo convetimos en un arreglo asocciativo
                $carrito = json_decode($contenidoArchivo,true);
                // Parte 3..........
                //retornamos nuevamente convetimos en un Json que es el que mandaremos al cliente
                echo json_encode ($carrito[$indice]); 
                

        }
        

        /**
         * Get the value of totalProducto
         */ 
        public function getTotalProducto()
        {
                return $this->totalProducto;
        }

        /**
         * Set the value of totalProducto
         *
         * @return  self
         */ 
        public function setTotalProducto($totalProducto)
        {
                $this->totalProducto = $totalProducto;

                return $this;
        }

        /**
         * Get the value of cantidadProducto
         */ 
        public function getCantidadProducto()
        {
                return $this->cantidadProducto;
        }

        /**
         * Set the value of cantidadProducto
         *
         * @return  self
         */ 
        public function setCantidadProducto($cantidadProducto)
        {
                $this->cantidadProducto = $cantidadProducto;

                return $this;
        }

        /**
         * Get the value of precioProducto
         */ 
        public function getPrecioProducto()
        {
                return $this->precioProducto;
        }

        /**
         * Set the value of precioProducto
         *
         * @return  self
         */ 
        public function setPrecioProducto($precioProducto)
        {
                $this->precioProducto = $precioProducto;

                return $this;
        }

        /**
         * Get the value of txtProducto
         */ 
        public function getTxtProducto()
        {
                return $this->txtProducto;
        }

        /**
         * Set the value of txtProducto
         *
         * @return  self
         */ 
        public function setTxtProducto($txtProducto)
        {
                $this->txtProducto = $txtProducto;

                return $this;
        }

        /**
         * Get the value of nombreProducto
         */ 
        public function getNombreProducto()
        {
                return $this->nombreProducto;
        }

        /**
         * Set the value of nombreProducto
         *
         * @return  self
         */ 
        public function setNombreProducto($nombreProducto)
        {
                $this->nombreProducto = $nombreProducto;

                return $this;
        }

        /**
         * Get the value of codigoProducto
         */ 
        public function getCodigoProducto()
        {
                return $this->codigoProducto;
        }

        /**
         * Set the value of codigoProducto
         *
         * @return  self
         */ 
        public function setCodigoProducto($codigoProducto)
        {
                $this->codigoProducto = $codigoProducto;

                return $this;
        }
    }


?>