<?php
    namespace app\clases;
    use mysqli;
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
   
            
    public function __construct($fecha,$descripcion,$categoria,$autor,$id_noticia,$titulo,$imagen,$link) {
            $this->fecha=$fecha;
            $this->tipo_noticia=$categoria;
            $this->texto=$descripcion;
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->id_noticia=$id_noticia;
            $this->imagen= $imagen;
            $this->link=$link;
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

            $sql = "SELECT `id_noticia`,`fecha`,`imagen`,`texto`,`link`,`autor`,`tipo_noticia`,`titulo``fecha` FROM noticias";
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

}
