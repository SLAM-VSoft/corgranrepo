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
class link_interes {
    public $id_link;
    public $nombre_sitio; //directoria o ruta de archivo
    public $link_acceso;
    
    public function __construct($id_link,$nombre_sitio,$link_acceso) {
            $this->id_link=$id_link;
            $this->nombre_sitio=$nombre_sitio;
            $this->link_acceso=$link_acceso;

    } 
    
    public function guardar_link_interes($obj_link_interes){

        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO link_interes (nombre_sitio, link_acceso)
        VALUES ('$obj_link_interes->nombre_arch','$obj_link_interes->formato')";
        
        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;
    } 
    
    public function borrar_link_interes($id_link_interes){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from link_interes where id_link ='$id_link_interes'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }
    
    public function buscar_link_interes($id_link)
    {
        
        $conn = $obj_coneccion->conectar();

        $sql= "select nombre_sitio, link_acceso, id_link
               from link_interes  where id_usuario ='$id_link'";
        $resultado = mysqli_query($conn,$sql);
        $result=[];
        while ($fila = mysql_fetch_assoc($resultado)) {
            
            $obj_link_interes=new link_interes($fila["id_link"],$fila["nombre_sitio"],$fila["link_acceso"]);
            $result[]=$obj_link_interes;
        }
        return $result;    
    }
        
    
}
