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
class noticia {
    //put your code here
    public $id_noticia ;
    public $fecha;
    public $imagen ; //directoria o ruta de archivo
    public $texto ;
    public $link ;
    public $autor ;
    public $tipo_noticia;
    public $titulo ;
   
            
    public function __construct($id_noticia,$fecha,$descripcion,$categoria,$autor,$titulo,$imagen,$link,$tipo_noticia) {
            $this->fecha=$fecha;
            $this->tipo_noticia=$categoria;
            $this->texto=$descripcion;
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->id_noticia=$id_noticia;
            $this->imagen= $imagen;
            $this->link=$link;
            $this->tipo_noticia=$tipo_noticia;
                } 
                
     public static function listaNoticias(): array
        {
            $servername = "localhost";
            $username = "root";
            $password = "slam2016";
            $dbname = "corgran";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT `id_noticia`,`fecha`,`imagen`,`texto`,`link`,`autor`,`tipo_noticia`,`titulo` FROM noticia";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $noticia = new noticia($row["fecha"],$row["descripcion"],
                               $row["categoria"],$row["autor"],$row["id_noticia"],$row["titulo"],
                               $row["imagen"],$row["link"]);
                $resultado[] = $noticia;                    
                }
                return $resultado;
            } else {
                echo "0 results";
            }
            $conn->close();
        }
        
    public function guardar_noticia($obj_noticia)
    {

        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "INSERT INTO descargas (fecha, descripcion, categoria,autor,titulo,imagen,link)
                VALUES ('$obj_noticia->fecha','$obj_noticia->$descripcion', '$obj_noticia->categoria', '$obj_noticia->autor',
                        '$obj_noticia->titulo','$obj_noticia->imagen','$obj_noticia->link')";
        
        if ($conn->query($sql) === TRUE) {
            $result = $conn->lastInsertRowID();
        } else {
            $result = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        return $result;

    public function borrar_noticias($id_noticia){
        
         // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Delete from noticia where id_noticia ='$id_noticia'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();
    }
        
    public function actualizar_noticia($obj_noticia)
    {
        // Create connection
        $conn = $obj_coneccion->conectar();
        
        $sql = "Update noticia set fecha='$obj_noticia->fecha', imagen='$obj_noticia->imagen',
                texto ='$obj_noticia->texto',link ='$obj_noticia->link',autor ='$obj_noticia->autor'
                tipo_noticia ='$obj_noticia->tipo_noticia',titulo ='$obj_noticia->titulo' 
                where id_noticia ='$obj_noticia->id_noticia'";
        
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $conn->close();

    }

}
