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
class datos_personales {
    public $id_datos_personales;
    public $apellido; //directoria o ruta de archivo
    public $nombre; 
    public $dni;
    public $cuit_cuil;
    public $fec_nac;
    public $id_usuario;
    

    public function __construct($id_datos_personales, $apellido, $nombre,$dni,$cuit_cuil,$fec_nac,$id_usuario) {
            $this->id_datos_personales=$id_datos_personales;
            $this->apellido=$apellido;
            $this->nombre=$nombre;
            $this->dni=$dni;
            $this->cuit_cuil=$cuit_cuil;
            $this->fec_nac=$fec_nac;
            $this->id_usuario=$id_usuario;
            
    } 
    
    public function guardar_datos_personales($obj_dtos_per){

        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO datos_personales (id_usuario, apellido, nombre,dni,cuit_cuil,fec_nac)
        VALUES ('$obj_dtos_per->id_usuario','$obj_dtos_per->apellido', '$obj_dtos_per->nombre','$obj_dtos_per->dni',
        '$obj_dtos_per->cuit_cuil','$obj_dtos_per->fec_nac')";
        
        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;

    }
    
    public function borrar_datos_personales($id_usuario){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from datos_personales where id_usuario ="$id_usuario;
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }     
    
    public function buscar_datos_personales($id_usuario):
    {
        $conn = $obj_coneccion->conectar();
        $sql= "select id_datos_personales, id_usuario, apellido, nombre,dni,cuit_cuil,fec_nac from datos_personales where id_usario="$id_usuario;
        $resultado = mysqli_query($conn,$sql);
        
        while ($fila = mysql_fetch_assoc($resultado)) {
            
            $obj_colegiado=new datos_personales($fila["id_datos_personales"],$fila["id_usuario"],$fila["apellido"],$fila["nombre"],
                                                $fila["dni"],$fila["cuit_cuit"],$fila["fec_nac"]);
            
        }
        return $obj_colegiado;    
    }
    
    public function actualizar_datos_personales($obj_dts_perso)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update datos_personales set apellido='$obj_dts_perso->apellido', nombre='$obj_dts_perso->nombre',
                dni='$obj_dts_perso->dni',cuit_cuit='$obj_dts_perso->cuit_cuit',fec_nac='$obj_dts_perso->fec_nac'                  
                where id_usuario ="$id_usuario;
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        $conn->close();
    }
}
