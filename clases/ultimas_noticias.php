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
class ultima_noticia {
    public $id_ultima_noticia; //directoria o ruta de archivo
    public $id_noticia;
    public $posicion;

    public function __construct($id_ultima_noticia,$id_noticia,$posicion) {
            $this->id_ultima_noticia=$id_ultima_noticia;
            $this->id_noticia=$id_noticia;
            $this->posicion=$posicion;
    } 
        
    
}