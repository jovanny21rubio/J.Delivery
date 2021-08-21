<?php
class OE{
private $idCompra;
private $NombrePedido;
private $direccionEntrega;

public function __construct($idCompra,$NombrePedido,$direccionEntrega,){
$this->idCompra=$idCompra;
$this->NombrePedido=$NombrePedido;
$this->direccionEntrega=$direccionEntrega;
}

public static function obtenerOrdenesEntregadas(){
$contenidoArchivo = file_get_contents("../data/OE.json");
$ordenes = json_decode($contenidoArchivo,true);
echo  json_encode($ordenes);

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
 * Get the value of direccionEntrega
 */ 
public function getDireccionEntrega()
{
return $this->direccionEntrega;
}

/**
 * Set the value of direccionEntrega
 *
 * @return  self
 */ 
public function setDireccionEntrega($direccionEntrega)
{
$this->direccionEntrega = $direccionEntrega;

return $this;
}
}

?>