<?php
class PDNT{
private  $idCompra;
private  $NombrePedido;
private  $direccionEntrega;
private  $Restaurante;
private  $numeroCliente;
private  $imagen;

public function __construct($idCompra,$NombrePedido,$direccionEntrega,$Restaurante,$numeroCliente,$imagen){
$this->idCompra=$idCompra;
$this->NombrePedido=$NombrePedido;
$this->direccionEntrega=$direccionEntrega;
$this->Restaurante=$Restaurante;
$this->numeroCliente=$numeroCliente;
$this->imagen->$imagen;
}

public static function obtenerPedidosDisponiblesNoTomados(){
$contenidoPedidos= file_get_contents('../data/PDNT.json');
$Disponible = json_decode($contenidoPedidos,true);
echo json_encode($Disponible);
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

/**
 * Get the value of Restaurante
 */ 
public function getRestaurante()
{
return $this->Restaurante;
}

/**
 * Set the value of Restaurante
 *
 * @return  self
 */ 
public function setRestaurante($Restaurante)
{
$this->Restaurante = $Restaurante;

return $this;
}

/**
 * Get the value of numeroCliente
 */ 
public function getNumeroCliente()
{
return $this->numeroCliente;
}

/**
 * Set the value of numeroCliente
 *
 * @return  self
 */ 
public function setNumeroCliente($numeroCliente)
{
$this->numeroCliente = $numeroCliente;

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