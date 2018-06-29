<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    namespace app\clases;
    require_once 'clases/coneccion.php';
    use \mysqli;
    use \mysqli_query;
    use \mysqli_error;
    use \mysql_fetch_assoc;
    use  app\clases\coneccion;
	$obj_coneccion = new coneccion; //

/**
 * Description of cuotas
 *
 * @author soporte
 */
class usuario {
    public $id_usuario; //directoria o ruta de archivo
    public $tipo_usu;
    public $nombre;
    public $clave;
    

    public function __construct($id_usuario,$tipo_usu,$nombre,$clave) {
            $this->id_usuario=$id_usuario;
            $this->tipo_usu=$tipo_usu;
            $this->nombre=$nombre;
            $this->clave=$clave;
            
    } 
        
    public function guardar_usuario($usuario){

        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO usuario (nombre, tipo_usu, clave)
        VALUES ('$usuario->nombre','$usuario->tipo_usu', '$usuario->clave')";
        
        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;

    }
    
    public function borrar_usuario($id_usuario){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from usuario where id_usuario ='$id_usuario'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();


    }
    
    public function lista_usuarios()
    {
        
        $conn = $obj_coneccion->conectar();

        $sql= "select id_usuario,tipo_usu,nombre,clave from usuario";
        $resultado = mysqli_query($conn,$sql);
        $result=[];
        while ($fila = mysql_fetch_assoc($resultado)) {
            
            $obj_usu=new usuario($fila["id_usuario"],$fila["tipo_usu"],$fila["nombre"],$fila["clave"]);
            $result[]=$obj_usu;
        }
        return $result;    
    }
    
    public function actualizar_usuario($obj_usu)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update usuario set tipo_usu='$obj_usu->id_usuario',nombre='$obj_usu->nombre',clave='$obj_usu->clave' where id_usuario ='$obj_usu->id_usuario'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
        
    }
    
}
