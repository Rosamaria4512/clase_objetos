<?php

require_once ("03_persona.php");

class Empleado extends Cliente{
    private $puesto;

    function __construct($vrnombre, $vredad, $vrid,  $vrcredito, $vrpuesto)
    {
       //llevo los datos al constructor de clase persona 
        parent:: __construct($vrnombre,$vredad, $vrid, $vrcredito);
        $this->puesto = $vrpuesto;
    }

}

?>