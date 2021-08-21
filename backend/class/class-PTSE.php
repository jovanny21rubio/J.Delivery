<?php
   class SinEntrega{
   private  $idCompra;
   private  $NombrePedido;
   private  $Nombrelocal;
   private  $Cantidad;
   private  $imagen;

public function __construct($idCompra,$NombrePedido,$Nombrelocal,$Cantidad,$imagen){
 $this->idCompra =$idCompra;
 $this->NombrePedido =$NombrePedido;
 $this->Nombrelocal =$Nombrelocal;
 $this->Cantidad =$Cantidad;
 $this->imagen =$imagen;
}

public static function TomadosSinEntrega(){
 $ContenidoArchivo = file_get_contents('../data/PTSE.json');
 $TomadosSE = json_decode($ContenidoArchivo,true);

 echo  json_encode($TomadosSE);

}

   /**
    * Get the value of idCompra
    */ 
   public function getIdCompra()
   {
      return $this->idCompra;
   }

   /**
    * Set the value of idCompra
    *
    * @return  self
    */ 
   public function setIdCompra($idCompra)
   {
      $this->idCompra = $idCompra;

      return $this;
   }

   /**
    * Get the value of NombrePedido
    */ 
   public function getNombrePedido()
   {
      return $this->NombrePedido;
   }

   /**
    * Set the value of NombrePedido
    *
    * @return  self
    */ 
   public function setNombrePedido($NombrePedido)
   {
      $this->NombrePedido = $NombrePedido;

      return $this;
   }

   /**
    * Get the value of Nombrelocal
    */ 
   public function getNombrelocal()
   {
      return $this->Nombrelocal;
   }

   /**
    * Set the value of Nombrelocal
    *
    * @return  self
    */ 
   public function setNombrelocal($Nombrelocal)
   {
      $this->Nombrelocal = $Nombrelocal;

      return $this;
   }

   /**
    * Get the value of Cantidad
    */ 
   public function getCantidad()
   {
      return $this->Cantidad;
   }

   /**
    * Set the value of Cantidad
    *
    * @return  self
    */ 
   public function setCantidad($Cantidad)
   {
      $this->Cantidad = $Cantidad;

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
   }

?>