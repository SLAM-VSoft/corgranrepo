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
class descargas {
    public $id_descarga;
    public $nombre_arch; //directoria o ruta de archivo
    public $formato;
    public $categoria_arch;
    
    

    public function __construct($id_descarga,$nombre_arch,$formato,$categoria_arch) {
            $this->id_descarga = $id_descarga;
            $this->nombre_arch=$nombre_arch;
            $this->formato=$formato;
            $this->categoria_arch=$categoria_arch;

    } 
        
    
}