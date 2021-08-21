<?php

class Motoristas{
private $Nombre;
private $Apellido;
private $NombreUsuario;
private $imagen;
private $Correo;
private $Contrasena;


public function __construct($Nombre,$Apellido,$NombreUsuario,$imagen,$Correo,$Contrasena){
 $this->Nombre =$Nombre;
 $this->Apellido=$Apellido;
 $this->NombreUsuario=$NombreUsuario;
 $this->imagen=$imagen;
 $this->Correo=$Correo;
 $this->Contrasena=$Contrasena;
    
}

public static function obtenerMotorista($indice){
$ContenidoArchivo= file_get_contents('../data/motoristas.json');
$morista = json_decode($ContenidoArchivo,true);
echo  json_encode($morista[$indice]);
}

public static function obtenerMotoristas(){
 $ContenidoArchivo= file_get_contents('../data/motoristas.json');
$moristas = json_decode($ContenidoArchivo,true);
echo  json_encode($moristas);
}


public function registrarMotorista(){
$contenidoRegistro = file_get_contents('../data/motoristas.json');
$motorista= json_decode($contenidoRegistro,true);
$motorista[] = array(
"Nombre"=>$this->Nombre,
"Apellido"=>$this->Apellido,
"NombreUsuario"=>$this->NombreUsuario,
"imagen"=>$this->imagen,
"Correo"=>$this->Correo,
"Contrasena"=>$this->Contrasena,
);

$archivo = fopen('../data/motoristas.json','w');
fwrite($archivo,json_encode($motorista));//Con esta funcion se escribe el arreglo asociativo 
fclose($archivo);// Se cierra el archivo 
echo '{"codigoResultado":1,"mensaje":"Guardado con extio"}';

}

public function actualizarUsuario($indice){
    $contenidoArchivo =file_get_contents("../data/motoristas.json");
    $usuarios = json_decode($contenidoArchivo,true);
    //$usuario = $usuarios [$indice];
    $usuario = array(
    "Nombre"=>$this->Nombre,
    "Apellido"=>$this->Apellido,
    "NombreUsuario"=>$this->NombreUsuario,
    "imagen"=>$this->imagen,
    "Correo"=>$this->Correo,
    "Contrasena"=>$this->Contrasena,
    );
    $usuarios[$indice]= $usuario;
    $Archivo = fopen('../data/motoristas.json','w'); 
    fwrite($Archivo,json_encode($usuarios));
    fclose($Archivo);
 }


 public static function validarInicioSesion($email, $password){
  
    $contenidoArchivo = file_get_contents("../data/motoristas.json");
    $usuarios = json_decode($contenidoArchivo, true);  
    $respuesta["resultado"] = 0; // Si las credenciales de entrada son incorrectas se retorna 0
    for ($i=0; $i < count(json_decode($contenidoArchivo)); $i++)
     {  
    if($usuarios[$i]["Correo"] == $email && $usuarios[$i]["Contrasena"] == $password)
      {
        $respuesta["resultado"] = 1; // Si las credenciales de entrada son correctas se retornan los valores necesarios para las variables de sesion
        $respuesta["correo"] = $usuarios[$i]["correo"];
        $respuesta["contrasena"] = $usuarios[$i]["contrasena"];
      }
    }  
    return $respuesta["resultado"];
 }





/**
 * Get the value of Nombre
 */ 
public function getNombre()
{
return $this->Nombre;
}

/**
 * Set the value of Nombre
 *
 * @return  self
 */ 
public function setNombre($Nombre)
{
$this->Nombre = $Nombre;

return $this;
}

/**
 * Get the value of Apellido
 */ 
public function getApellido()
{
return $this->Apellido;
}

/**
 * Set the value of Apellido
 *
 * @return  self
 */ 
public function setApellido($Apellido)
{
$this->Apellido = $Apellido;

return $this;
}

/**
 * Get the value of NombreUsuario
 */ 
public function getNombreUsuario()
{
return $this->NombreUsuario;
}

/**
 * Set the value of NombreUsuario
 *
 * @return  self
 */ 
public function setNombreUsuario($NombreUsuario)
{
$this->NombreUsuario = $NombreUsuario;

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
 * Get the value of Correo
 */ 
public function getCorreo()
{
return $this->Correo;
}

/**
 * Set the value of Correo
 *
 * @return  self
 */ 
public function setCorreo($Correo)
{
$this->Correo = $Correo;

return $this;
}

/**
 * Get the value of Contrasena
 */ 
public function getContraseña()
{
return $this->Contrasena;
}

/**
 * Set the value of Contrasena
 *
 * @return  self
 */ 
public function setContraseña($Contrasena)
{
$this->Contrasena = $Contrasena;

return $this;
}
}

?>