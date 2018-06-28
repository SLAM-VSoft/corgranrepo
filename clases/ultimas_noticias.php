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
	
	
class ultima_noticia {
    public $id_ultima_noticia; //directoria o ruta de archivo
    public $id_noticia;
    public $posicion;

    public function __construct($id_ultima_noticia,$id_noticia,$posicion) {
            $this->id_ultima_noticia=$id_ultima_noticia;
            $this->id_noticia=$id_noticia;
            $this->posicion=$posicion;
    } 
    
    public function guardar_ultima_noticia($obj_ulti_noti){

        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO ultima_noticia (id_noticia, posicion)
                VALUES ('$obj_ulti_noti->id_noticia','$obj_ulti_noti->posicion')";
        
        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;

    }   
    public function borrar_ultima_noticia($id_ultima_noticia){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from ultima_noticia where $id_ultima_noticia ='$id_ultima_noticia'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }
    
    public function lista_ultima_noticias()
    {
        $conn = $obj_coneccion->conectar();
        $sql= "select id_ultima_noticia,id_noticia, posicion
               from ultima_noticia ";
        $resultado = mysqli_query($conn,$sql);
        $result=[];
        while ($fila = mysql_fetch_assoc($resultado)) {
            
            $obj_ult_noti=new ultima_noticia($fila["id_ultima_noticia"],$fila["id_noticia"],$fila["posicion"]);
            $result[]=$obj_ult_noti;
        }
        return $result;    
    }
    
    public function actualizar_ultima_noticia($obj_ult_noti)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update ultima_noticia set id_noticia='$obj_ult_noti->id_noticia', posicion='$obj_ult_noti->posicion'
                where id_ultima_noticia ='$obj_ult_noti->id_ultima_noticia'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }
    
}