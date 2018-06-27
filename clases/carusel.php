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
class carusel {
    public $id_carusel;
    public $imagen; //directoria o ruta de archivo
    public $titulo;
    
    

    public function __construct($id_carusel,$imagen,$titulo) {
            $this->id_carusel=$id_carusel;
            $this->imagen=$imagen;
            $this->titulo=$titulo;

    } 
        
    
}
