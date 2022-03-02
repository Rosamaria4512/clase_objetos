<?php

require_once ("01_clasePersona.php");

class Contador extends Empleado{
    public $dias_laborados;

    
    function __construct($vrnombre,$vredad,$vrvalor_hora,$vrdias_laborados){

        //llevo los datos al constructor de clase usuario 
        parent:: __construct($vrnombre,$vredad,$vrvalor_hora,$vrdias_laborados);
        
        $this->nombre=$vrnombre;
        $this->edad=$vredad;
        $this->valor_hora=$vrvalor_hora;
        $this->dias_laborados=$vrdias_laborados;
    }
    public function getDiastrabajados(){
        $Diastrabajados=$this->valor_hora*$this->dias_laborados;
      return  $Diastrabajados;
    }
    }//fin de clase
        