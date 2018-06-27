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
class delegacion {
    public $id_delegacion;
    public $localidad; //directoria o ruta de archivo
    public $mes ;
    public $anio;
    public $id_colegiado;
    
    public function __construct($id_delegacion,$localidad,$mes,$anio,$id_colegiado) {
            $this->id_delegacion=$id_delegacion;
            $this->localidad=$localidad;
            $this->mes=$mes;
            $this->anio=$anio;
            $this->id_colegiado=$id_colegiado;
                } 
        
    
}
