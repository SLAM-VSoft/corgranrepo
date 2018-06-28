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
class carusel {
    public $id_carusel;
    public $imagen; //directoria o ruta de archivo
    public $titulo;
    public $descripcion;
    
    

    public function __construct($id_carusel,$imagen,$titulo,$descripcion) {
            $this->id_carusel=$id_carusel;
            $this->imagen=$imagen;
            $this->titulo=$titulo;
            $this->descripcion=$descripcion;
            
    } 
       public function guardar_carusel($obj_carusel){
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO carusel (id_imagen, titulo, descripcion)
        VALUES ('$obj_carusel->id_imagen','$obj_carusel->titulo',$obj_carusel->descripcion)";

        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;
    }

    public function borrar_carusel($id_carusel){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from carusel where id_carusel ='$id_carusel'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }
    
    public function buscar_carusel()
    {
        $conn = $obj_coneccion->conectar();
        $sql= "select id_carusel, imagen,titulo,descripcion from carusel'";
        $resultado = mysqli_query($conn,$sql);
        
        while ($fila = mysql_fetch_assoc($resultado)) {
            $obj_carusel=new carusel($fila["id_carusel"],$fila["imagen"],$fila["titulo"],$fila["descripcion"]);
        }
        return $obj_carusel;    
    }
    
    public function actualizar_carusel($obj_carusel)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update carusel set imagen='$obj_carusel->imagen' , titulo='$obj_carusel->titulo', descripcion='$obj_carusel->descripcion' where id_carusel ='$obj_carusel->id_carusel'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
        
    }
     
    
        
    
}
