<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

   namespace app\clases;
   use \mysqli_connect;
/**/
    class Coneccion {
    
             
        public $servername = "localhost"; //directoria o ruta de archivo
        public $username= "username";
        public $password= "password";
        public $dbname= "myDB";
        
        public function conectar()
        {
                    
            $conn = new mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            return $conn;
        }
    }
?>