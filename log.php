<?php

    use  app\clases\coneccion;
	$obj_coneccion = new coneccion; //
	
	public function login($nombre,$clave)
	{
    	session_start();
    	$conn = new mysqli($obj_coneccion->servername,
    	                   $obj_coneccion->username,
    	                   $obj_coneccion->password,
    	                   $obj_coneccion->dbnam);
                
        $sql = "select * from usuario where nombre =? and clave=?";
        $pre=$conn->prepare($sql);
        $pre->bind_param('is',$nombre,$clave);
        $pre->execute();
        $pre->bind_result($id_usuario,$tipo_usu,$nombre,$clave);
        if($pre->fetch())
        {
            $_SESSION['admin'] =$nombre;
            
        }else
        {
            echo 'Lo siento pero no coinciden ni el nombre ni la contraseña <br>';
            echo '<a href="index.php">volver a Incio</a>'; 
        }
            
        $conn->close();

    }

?>