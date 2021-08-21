<?php

    class Empresas{
        private $codigoEmpresa;
        private $codigoCatalogo;
        private $nombreEmpresa;
        private $imagenEmpresa;

        public function __construct(
            $codigoEmpresa,
            $codigoCatalogo,
            $nombreEmpresa,
            $imagenEmpresa
        ) {
            $this->codigoEmpresa =  $codigoEmpresa;
            $this->codigoCatalogo =  $codigoCatalogo;
            $this->nombreEmpresa =  $nombreEmpresa;
            $this->imagenEmpresa =  $imagenEmpresa;

        }

        public static function  obtenerEmpresas() {
            // 1. leer todo el archivo
            // 2. Enviar la informacion
            $contenidoArchivo = file_get_contents("../data/empresa.json");
            echo $contenidoArchivo;

        }
        /**
         * Get the value of imagenEmpresa
         */ 
        public function getImagenEmpresa()
        {
                return $this->imagenEmpresa;
        }

        /**
         * Set the value of imagenEmpresa
         *
         * @return  self
         */ 
        public function setImagenEmpresa($imagenEmpresa)
        {
                $this->imagenEmpresa = $imagenEmpresa;

                return $this;
        }

        /**
         * Get the value of nombreEmpresa
         */ 
        public function getNombreEmpresa()
        {
                return $this->nombreEmpresa;
        }

        /**
         * Set the value of nombreEmpresa
         *
         * @return  self
         */ 
        public function setNombreEmpresa($nombreEmpresa)
        {
                $this->nombreEmpresa = $nombreEmpresa;

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