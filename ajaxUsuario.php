<?php
    print_r("holaaa");
    require_once 'clases/usuario.php';
    use usuario;
    $obj_usuario = new usuario(); 
    
    $clave = $_POST["clave"];
    $nombre = $_POST["nombre"];
    
    $obj_usuario->tipo_usu="admin";
    $obj_usuario->nombre=$nombre;
    $obj_usuario->clave=$clave;
    return $obj_usuario->guardar_usuario($obj_usuario);
    
?>