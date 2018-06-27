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
class colegiado {
    public $id_colegiado;
    public $id_usuario; //directoria o ruta de archivo
    public $nro_colegiado; 
    

    public function __construct($id_usuario,$id_colegiado,$nro_colegiado) {
            $this->id_usuario=$id_usuario;
            $this->id_colegiado=$id_colegiado;
            $this->nro_colegiado=$nro_colegiado;
            
    } 
        
    
}
