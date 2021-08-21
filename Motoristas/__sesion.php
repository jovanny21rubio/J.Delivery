<?php
    session_start(); 
    
    unset($_SESSION["Motorista_correo"]);
    unset($_SESSION["Motorista_contrasenas"]);
    //unset($_SESSION["twitter_tipousuario"]);
    session_destroy();
    header("Location: index.php");
    exit;
?>