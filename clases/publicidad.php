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
class publicidad {
    public $id_publicidad; //directoria o ruta de archivo
    public $titulo;
    public $imagen;//directoria o ruta de archivo
    public $texto;
    public $link;
    public $posicion;
    

    public function __construct($id_publicidad,$titulo,$imagen,$texto,$link,$posicion) {
            $this->id_publicidad=$id_publicidad;
            $this->titulo=$titulo;
            $this->imagen=$imagen;
            $this->texto =$texto;
            $this->link=$link;
            $this->posicion=$posicion;
            
    } 
    public function guardar_publicidad($obj_publicidad){

        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO descargas (titulo, imagen, texto,link,posicion)
                VALUES ('$obj_publicidad->titulo','$obj_publicidad->imagen', '$obj_publicidad->texto',
                        '$obj_publicidad->link','$obj_publicidad->posicion')";
        
        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;

    }  
    public function borrar_publicidad($id_publicidad){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from publicidad where id_pubicidad ='$id_publicidad'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }
    public function lista_publicidad()
    {
        
        $conn = $obj_coneccion->conectar();

        $sql= "select id_publicidad,titulo, imagen, texto, link,posicion
               from publicidad ";
        $resultado = mysqli_query($conn,$sql);
        $result=[];
        while ($fila = mysql_fetch_assoc($resultado)) {
            
            $obj_publicidad=new publicidad($fila["id_publicidad"],$fila["titulo"],$fila["imagen"],$fila["texto"],
                                                $fila["link"],$fila["posicion"]);
            $result[]=$obj_publicidad;
        }
        return $result;    
    }
    
    public function actualizar_publicidad($obj_public)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update publicidad set titulo='$obj_public->titulo', imagen='$obj_public->imagen',
                texto ='$obj_public->texto',link ='$obj_public->link',posicion ='$obj_public->posicion'
                where id_publicidad ='$obj_public->id_publicidad'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    } 
    
}