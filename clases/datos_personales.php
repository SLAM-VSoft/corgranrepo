<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    namespace app\clases;
    use \mysqli;
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
            $this->id_usuario=$id_datos_personales;
            $this->id_colegiado=$apellido;
            $this->nombre=$nombre;
            $this->dni=$dni;
            $this->cuit_cuil=$cuit_cuil;
            $this->fec_nac=$fec_nac;
            $this->id_usuario=$id_usuario;
            
    } 
        
    
}
