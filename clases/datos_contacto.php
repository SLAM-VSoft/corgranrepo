<?php
    namespace app\clases;
    use mysqli;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author soporte
 */
class datos_contacto {
    //put your code here
    public $id_contacto ;
    public $id_usuario;
    public $domic_personal ; //directoria o ruta de archivo
    public $telefono ;
    public $empresa;
    public $domic_laboral;
    public $domic_consultorio;
    public $localidad;
    public $telefono_laboral;
    public $email;
    public $email_laboral;
   
            
    public function __construct($id_contacto,$id_usuario,$domic_personal,$telefono,$empresa,$domic_laboral,$domic_consultorio,
                                $localidad,$telefono_laboral,$email,$email_laboral) 
    {
            $this->id_contacto=$id_contacto;
            $this->id_usuario=$id_usuario;
            $this->domic_personal=$domic_personal;
            $this->telefono=$telefono;
            $this->autor=$autor;
            $this->empresa=$empresa;
            $this->domic_laboral= $domic_laboral;
            $this->domic_consultorio=$domic_consultorio;
            $this->localidad=$localidad;
            $this->telefono_laboral=$telefono_laboral;
            $this->email=$email;
            $this->email_laboral=$email_laboral; 
    } 
                
    

}
