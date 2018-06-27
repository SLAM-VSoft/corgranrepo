<?php
    namespace app\clases;
    use \mysqli;

class matriculacion {
    public $id_matriculacion;
    public $id_usuario; //directoria o ruta de archivo
    public $mp; 
    public $nro_resolucion;
    public $fec_resolucion;
    public $resolucion_baja;
    public $fec_resolucion_baja;
    public $fec_matricula;
    public $venc_matricula;

    
    

    public function __construct($id_matriculacion, $id_usuario, $mp,$nro_resolucion,$fec_resolucion
                                ,$resolucion_baja,$fec_resolucion_baja,$fec_matricula,$venc_matricula) 
    {
            $this->id_matriculacion=$id_matriculacion;
            $this->id_usuario=$id_usuario;
            $this->mp=$mp;
            $this->nro_resolucion=$nro_resolucion;
            $this->fec_resolucion=$fec_resolucion;
            $this->fec_matricula=$resolucion_baja;
            $this->venc_matricula=$fec_resolucion_baja;
            $this->fec_matricula=$fec_matricula;
            $this->venc_matricula=$venc_matricula;

    } 
        
    
}
