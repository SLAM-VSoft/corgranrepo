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
class titulo {
    public $id_titulo;
    public $id_usuario; //directoria o ruta de archivo
    public $expedido_por;
    public $fec_egreso;
    

    public function __construct($id_usuario,$id_titulo,$expedido_por,$fec_egreso) {
            $this->id_usuario=$id_usuario;
            $this->id_titulo=$id_titulo;
            $this->expedido_por=$expedido_por;
            $this->fec_egreso=$fec_egreso;
            
    } 
        
    
}
