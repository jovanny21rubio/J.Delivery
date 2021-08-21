<?php
    session_start();
    if (!isset( $_SESSION["Motorista_Nombre"] )&&
        !isset( $_SESSION["Motorista_Apellido"] ) &&
        !isset( $_SESSION["Motorista_NombreUsuario"])&&
        !isset( $_SESSION["Motorista_Correo"])&&
        !isset( $_SESSION["Motorista_Contrasena"])&&
        !isset( $_SESSION["Motorista_imagen"])
         //&&
        //!isset($_SESSION["Motorista_tipousuario"])
        ){ // AGREGAR CAMPO A LOS ARCHIVOS, FORMULARIOS Y OPERACIONES
        header("Location: index.php");
    }
    if (isset( $_SESSION["Motorista_Correo"] )) {
        echo '<script>var mySesVar='.json_encode($_SESSION).';</script>';
    }
?>