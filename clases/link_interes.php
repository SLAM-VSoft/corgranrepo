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
class link_interes {
    public $id_link;
    public $nombre_sitio; //directoria o ruta de archivo
    public $link_acceso;
    
    

    public function __construct($id_link,$nombre_sitio,$link_acceso) {
            $this->id_link=$id_link;
            $this->nombre_sitio=$nombre_sitio;
            $this->link_acceso=$link_acceso;

    } 
        
    
}
