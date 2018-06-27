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
class usuario {
    public $id_usuario; //directoria o ruta de archivo
    public $tipo_usu;
    public $nombre;
    public $clave;
    

    public function __construct($id_usuario,$tipo_usu,$nombre,clave) {
            $this->id_usuario=$id_usuario;
            $this->tipo_usu=$tipo_usu;
            $this->nombre=$nombre;
            $this->clave=$clave;
            
    } 
        
    
}
