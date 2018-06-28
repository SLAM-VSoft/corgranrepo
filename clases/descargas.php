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
class descargas {
    public $id_descarga;
    public $nombre_arch; //directoria o ruta de archivo
    public $formato;
    public $categoria_arch;
    
    

    public function __construct($id_descarga,$nombre_arch,$formato,$categoria_arch) {
            $this->id_descarga = $id_descarga;
            $this->nombre_arch=$nombre_arch;
            $this->formato=$formato;
            $this->categoria_arch=$categoria_arch;

    } 
    
    public function guardar_descargas($obj_descargas){

        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO descargas (nombre_arch, formato, categoria_arch)
        VALUES ('$obj_descargas->nombre_arch','$obj_descargas->formato', '$obj_descargas->categoria_arch')";
        
        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;

    }  
    public function borrar_descargas($id_descarga){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from descargas where id_usuario ='$id_descarga'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }
    
    public function buscar_descargas($id_descargas)
    {
        
        $conn = $obj_coneccion->conectar();

        $sql= "select nombre_arch, formato, categoria_arch
               from descargar  where id_usuario ='$id_descargas'";
        $resultado = mysqli_query($conn,$sql);
        $result=[];
        while ($fila = mysql_fetch_assoc($resultado)) {
            
            $obj_delegacion=new descargas($fila["id_descarga"],$fila["nombre_arch"],$fila["formato"],
                                          $fila["categoria_arch"]);
            $result[]=$obj_delegacion;
        }
        return $result;    
    }
    
    public function actualizar_descargas($obj_descargas)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update descargas set nombre_arch='$obj_descargas->nombre_arch', formato='$obj_descargas->formato',
                categoria_arch ='$obj_descargas->categoria_arch' where id_descargas ='$obj_descargas->id_descargas'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();

    }

}