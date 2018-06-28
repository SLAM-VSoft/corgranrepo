<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    namespace app\clases;
    require_once 'clases/coneccion.php';
    use \mysqli;
    use \mysqli_query;
    use \mysqli_error;
    use \mysql_fetch_assoc;
    use  app\clases\coneccion;
	$obj_coneccion = new coneccion; //
/**
 * Description of cuotas
 *
 * @author soporte
 */
class cuota {
    public $id_cuota;
    public $idusuario;
    public $fec_pago; //directoria o ruta de archivo
    public $monto ;
    public $estado;
    public $interes;
    public $pago_adelantado;
    public $nro_cta;
    public $fecha_cta;
    
    public function __construct($id_cuota,$idcolegiados,$fec_pago,$monto,$estado,$interes,$pago_adelantado,$nro_cta,$fecha_cta) {
            $this->id_cuota=$id_cuota;
            $this->idcolegiados=$idcolegiados;
            $this->fec_pago=$fec_pago;
            $this->monto=$monto;
            $this->estado=$estado;
            $this->interes=$interes;
            $this->pago_adelantado= $pago_adelantado;
            $this->nro_cta=$nro_cta;
            $this->fecha_cta=$fecha_cta;
                } 
        
    public static function listaCta($id_colegiado)
        {
            $servername = "localhost";
            $username = "root";
            $password = "slam2016";
            $dbname = "corgran";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT `id_cuota`,`idcolegiados`,`fec_pago`,`tipo_cuota`,`monto`,`estado`,"
                    . "`interes`,`pago_adelantado`,`nro_cta`,`fecha_cta` FROM cuotas where idcolegiados =".$id_colegiado ;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $cuota = new cuota($row["id_cuota"],$row["idcolegiados"],
                               $row["fec_pago"],$row["tipo_cuota"],$row["monto"],$row["estado"],
                               $row["interes"],$row["pago_adelantado"],$row["nro_cta"],$row["fecha_cta"]);
                $resultado[] = $cuota;                    
                }
                return $resultado;
            } else {
                echo "0 results";
            }
            $conn->close();
        }             
}
?>