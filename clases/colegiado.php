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
class colegiado {
    public $id_colegiado;
    public $id_usuario; //directoria o ruta de archivo
    public $nro_colegiado; 
    

    public function __construct($id_usuario,$id_colegiado,$nro_colegiado) {
            $this->id_usuario=$id_usuario;
            $this->id_colegiado=$id_colegiado;
            $this->nro_colegiado=$nro_colegiado;
            
    } 
        
    public function guardar_colegiado($colegiado){
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO usuario (id_usuario, nro_colegiado)
        VALUES ('$colegiado->id_usuario','$colegiado->nro_colegiado')";

        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;
    }

    public function borrar_colegiado($id_usuario){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from colegiado where id_usuario ='$id_usuario'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }
    
    public function buscar_colegiado($id_usuario)
    {
        $conn = $obj_coneccion->conectar();
        $sql= "select id_colegiado, id_usuario,nro_colegiado from colegiado where id_usario='$id_usuario'";
        $resultado = mysqli_query($conn,$sql);
        
        while ($fila = mysql_fetch_assoc($resultado)) {
            
            $obj_colegiado=new colegiado($fila["id_colegiado"],$fila["id_usuario"],$fila["nro_colegiado"]);
            
        }
        return $obj_colegiado;    
    }
    
    public function actualizar_colegiado($id_usuario, $nro_colegiado)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update colegiado set nro_colegiado='$nro_colegiado' where id_usuario ='$id_usuario'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
        
    }
    
    
    
    
       
}
