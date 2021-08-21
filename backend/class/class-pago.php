<?php

    class Pago{
        private $IdCliente;
        private $NombreDeTarjeta;
        private $NumeroDeTarjeta;
        private $FechaDeExpiracion;
        private $CodigodeSeguridad;
        private $totalProducto;

        public function __construct(
            $IdCliente,
            $NombreDeTarjeta,
            $NumeroDeTarjeta,
            $FechaDeExpiracion,
            $CodigodeSeguridad,
            $totalProducto
        
        ){
            $this->IdCliente= $IdCliente;
            $this->NombreDeTarjeta= $NombreDeTarjeta;
            $this->NumeroDeTarjeta= $NumeroDeTarjeta;
            $this->FechaDeExpiracion= $FechaDeExpiracion;
            $this->CodigodeSeguridad= $CodigodeSeguridad;
            $this->totalProducto= $totalProducto;
        }

        

        // Metodos CRUD
        public function guardarPago(){
            // 1. leemos el archivo Json
            // 2. convertimos el archivo Json a Asocitivo
            // 3. Escribimos en el agregro asociativo
            // 4. Sustituimos en el archivo Json con la nueva informacion
            // 5.escribimos el archivo
            // 6. cerramos el flujo 
            // Parte 1..........
            //LEER EL ARCHIVO
            $contenidoArchivo = file_get_contents("../data/pago.json");
            // Parte 2..........
            // convertimos la cadena Json a un Areglo asociativo
            $pagos = json_decode($contenidoArchivo,true);
            // Parte 3..........
            // Agregamos el nuevo elemento 
            $pagos[] = array(
                "IdCliente" => $this->IdCliente,
                "NombreDeTarjeta" => $this->NombreDeTarjeta,
                "NumeroDeTarjeta" => $this->NumeroDeTarjeta,
                "FechaDeExpiracion" => $this->FechaDeExpiracion,
                "CodigodeSeguridad" => $this->CodigodeSeguridad,
                "totalProducto" => $this->totalProducto
            );
            // Parte 4..........
            //sustituimos todo nuestro areglo
            //Abrimos el archivo...
            $archivo = fopen("../data/pago.json","w"); // W sustituye todo
            // Parte 5.......... 
            //Escribir el archivo..
            fwrite($archivo, json_encode($pagos));
            // Parte 6..........
            //CERRAMOS EL FLUJO DEL ARCHIVO...
            fclose($archivo);
            }

        public static function  obtenerPagos() {
            // 1. leer todo el archivo
            // 2. Enviar la informacion
            $contenidoArchivo = file_get_contents("../data/pago.json");
            echo $contenidoArchivo;
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
         * Get the value of CodigodeSeguridad
         */ 
        public function getCódigodeSeguridad()
        {
                return $this->CodigodeSeguridad;
        }

        /**
         * Set the value of CodigodeSeguridad
         *
         * @return  self
         */ 
        public function setCódigodeSeguridad($CodigodeSeguridad)
        {
                $this->CodigodeSeguridad = $CodigodeSeguridad;

                return $this;
        }

        /**
         * Get the value of FechaDeExpiracion
         */ 
        public function getFechaDeExpiración()
        {
                return $this->FechaDeExpiracion;
        }

        /**
         * Set the value of FechaDeExpiracion
         *
         * @return  self
         */ 
        public function setFechaDeExpiración($FechaDeExpiracion)
        {
                $this->FechaDeExpiracion = $FechaDeExpiracion;

                return $this;
        }

        /**
         * Get the value of NumeroDeTarjeta
         */ 
        public function getNúmeroDeTarjeta()
        {
                return $this->NumeroDeTarjeta;
        }

        /**
         * Set the value of NumeroDeTarjeta
         *
         * @return  self
         */ 
        public function setNúmeroDeTarjeta($NumeroDeTarjeta)
        {
                $this->NumeroDeTarjeta = $NumeroDeTarjeta;

                return $this;
        }

        /**
         * Get the value of NombreDeTarjeta
         */ 
        public function getNombreDeTarjeta()
        {
                return $this->NombreDeTarjeta;
        }

        /**
         * Set the value of NombreDeTarjeta
         *
         * @return  self
         */ 
        public function setNombreDeTarjeta($NombreDeTarjeta)
        {
                $this->NombreDeTarjeta = $NombreDeTarjeta;

                return $this;
        }

        /**
         * Get the value of IdCliente
         */ 
        public function getIdCliente()
        {
                return $this->IdCliente;
        }

        /**
         * Set the value of IdCliente
         *
         * @return  self
         */ 
        public function setIdCliente($IdCliente)
        {
                $this->IdCliente = $IdCliente;

                return $this;
        }
    }



?>