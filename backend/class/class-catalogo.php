<?php

    class Catalogo{
        private $codigoEmpresa;
        private $codigoCatalogo;
        private $nombreCatalogo;
        private $imagenCatalogo;

        public function __construct(
            $codigoEmpresa,
            $codigoCatalogo,
            $nombreCatalogo,
            $imagenCatalogo
        ) {
            $this->codigoEmpresa =  $codigoEmpresa;
            $this->codigoCatalogo =  $codigoCatalogo;
            $this->nombreCatalogo =  $nombreCatalogo;
            $this->imagenCatalogo =  $imagenCatalogo;

        }

        public static function  obtenerCatalogos() {
                // 1. leer todo el archivo
                // 2. Enviar la informacion
                $contenidoArchivo = file_get_contents("../data/catalogo.json");
                echo $contenidoArchivo;

        }
        

        /**
         * Get the value of imagenCatalogo
         */ 
        public function getimagenCatalogo()
        {
                return $this->imagenCatalogo;
        }

        /**
         * Set the value of imagenCatalogo
         *
         * @return  self
         */ 
        public function setimagenCatalogo($imagenCatalogo)
        {
                $this->imagenCatalogo = $imagenCatalogo;

                return $this;
        }

        /**
         * Get the value of nombreCatalogo
         */ 
        public function getNombreCatalogo()
        {
                return $this->nombreCatalogo;
        }

        /**
         * Set the value of nombreCatalogo
         *
         * @return  self
         */ 
        public function setNombreCatalogo($nombreCatalogo)
        {
                $this->nombreCatalogo = $nombreCatalogo;

                return $this;
        }

        /**
         * Get the value of codigoCatalogo
         */ 
        public function getCodigoCatalogo()
        {
                return $this->codigoCatalogo;
        }

        /**
         * Set the value of codigoCatalogo
         *
         * @return  self
         */ 
        public function setCodigoCatalogo($codigoCatalogo)
        {
                $this->codigoCatalogo = $codigoCatalogo;

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