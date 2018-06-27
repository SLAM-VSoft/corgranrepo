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
class publicidad {
    public $id_publicidad; //directoria o ruta de archivo
    public $titulo;
    public $imagen;//directoria o ruta de archivo
    public $texto;
    public $link;
    public $posicion;
    

    public function __construct($id_publicidad,$titulo,$imagen,$texto,$link,$posicion) {
            $this->id_publicidad=$id_publicidad;
            $this->titulo=$titulo;
            $this->imagen=$imagen;
            $this->texto =$texto;
            $this->link=$link;
            $this->posicion=$posicion;
            
    } 
        
    
}