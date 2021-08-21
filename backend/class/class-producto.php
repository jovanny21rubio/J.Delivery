<?php

    class Productos{
        private $codigoEmpresa;
        private $codigoProducto;
        private $imagen;
        private $nombreProducto;
        private $txtProducto;
        private $precioProducto;
        private $cantidadProducto;
        private $totalProducto;
        
        public function __construct(
            $codigoEmpresa,
            $codigoProducto,
            $imagen,
            $nombreProducto,
            $txtProducto,
            $precioProducto,
            $cantidadProducto,
            $totalProducto
        ){
            $this->codigoEmpresa = $codigoEmpresa;
            $this->codigoProducto = $codigoProducto;
            $this->imagen = $imagen;
            $this->nombreProducto = $nombreProducto;
            $this->txtProducto = $txtProducto;
            $this->precioProducto = $precioProducto;
            $this->cantidadProducto = $cantidadProducto;
            $this->totalProducto = $totalProducto;

        }

        public static function  obtenerProducto() {
            // 1. leer todo el archivo
            // 2. Enviar la informacion
            $contenidoArchivo = file_get_contents("../data/producto.json");
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
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

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

        /**
         * Get the value of codigoEmpresa
         */ 
        public function getCodigoEmpresa()
        {
                return $this->codigoEmpresa;
        }

        /**
         * Set the value of codigoEmpresa
         *
         * @return  self
         */ 
        public function setCodigoEmpresa($codigoEmpresa)
        {
                $this->codigoEmpresa = $codigoEmpresa;

                return $this;
        }
    }


?>