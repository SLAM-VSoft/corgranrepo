<?php
    namespace app\clases;
    require_once 'clases/coneccion.php';
    use \mysqli;
    use \mysqli_query;
    use \mysqli_error;
    use \mysql_fetch_assoc;
    use  app\clases\coneccion;
	$obj_coneccion = new coneccion; //
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author soporte
 */
class datos_contacto {
    //put your code here
    public $id_contacto ;
    public $id_usuario;
    public $domic_personal ; //directoria o ruta de archivo
    public $telefono ;
    public $empresa;
    public $domic_laboral;
    public $domic_consultorio;
    public $localidad;
    public $telefono_laboral;
    public $email;
    public $email_laboral;
   
            
    public function __construct($id_contacto,$id_usuario,$domic_personal,$telefono,
                                $empresa,$domic_laboral,$domic_consultorio,
                                $localidad,$telefono_laboral,$email,$email_laboral) 
    {
            $this->id_contacto=$id_contacto;
            $this->id_usuario=$id_usuario;
            $this->domic_personal=$domic_personal;
            $this->telefono=$telefono;
            $this->autor=$autor;
            $this->empresa=$empresa;
            $this->domic_laboral= $domic_laboral;
            $this->domic_consultorio=$domic_consultorio;
            $this->localidad=$localidad;
            $this->telefono_laboral=$telefono_laboral;
            $this->email=$email;
            $this->email_laboral=$email_laboral; 
    } 
    
    public function guardar_datos_contacto($obj_datos_contacto){

        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO datos_contacto (id_usuario,domic_personal,telefono,empresa,domic_laboral,
                                            domic_consultorio,localidad,telefono_laboral,
                                            email,email_laboral)
                VALUES ('$obj_datos_contacto->id_usuario','$obj_datos_contacto->domic_personal','$obj_datos_contacto->telefono',
                        '$obj_datos_contacto->empresa','$obj_datos_contacto->domic_laboral','$obj_datos_contacto->domic_consultorio',
                        '$obj_datos_contacto->localidad','$obj_datos_contacto->telefono_laboral','$obj_datos_contacto->email',
                        '$obj_datos_contacto->email_laboral')";
        
        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;

    }
    
    public function borrar_datos_contacto($id_usuario){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from datos_contacto where id_usuario ="$id_usuario;
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();

    }

    public function buscar_datos_datos_contacto($id_usuario):array
    {
        
        $conn = $obj_coneccion->conectar();

        $sql= "select id_datos_personales, id_usuario, domic_personal, telefono, empresa, domic_laboral,
               domic_consultorio,localidad,telefono_laboral,email,email_laboral 
               from datos_contacto  where id_usuario ="$id_usuario;
        $resultado = mysqli_query($conn,$sql);
        $result=[];
        while ($fila = mysql_fetch_assoc($resultado)) {
            
            $obj_datos_personales=new datos_contacto($fila["id_datos_personales"],$fila["id_usuario"],$fila["domic_personal"],
                                          $fila["telefono"],$fila["empresa"],$fila["domic_laboral"],$fila["domic_consultorio"],
                                          $fila["localidad"],$fila["telefono_laboral"],$fila["email"],$fila["email_laboral"]);
            $result[]=$obj_datos_personales;
        }
        return $result;    
    }                
    
    public function actualizar_datos_contacto($obj_dts_perso)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update datos_contacto set domic_personal='$obj_dts_perso->domic_personal', telefono='$obj_dts_perso->telefono',
                empresa='$obj_dts_perso->empresa', domic_laboral='$obj_dts_perso->domic_laboral', domic_consultorio ='$obj_dts_perso->domic_consultorio',
                localidad ='$obj_dts_perso->localidad',telefono_laboral='$obj_dts_perso->telefono_laboral',email='$obj_dts_perso->email',
                email_laboral='$obj_dts_perso->email_laboral' where id_usuario ='$obj_dts_perso->id_usuario'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();

    }

}
