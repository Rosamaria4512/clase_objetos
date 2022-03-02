<?php

require_once("01_clasePersona.php");

class Empleado extends Persona {


    public $valor_hora;

    function __construct($vrnombre,$vredad,$vrvalor_hora){
    

        parent:: __construct($vrnombre,$vredad, $vrvalor_hora);
        $this->nombre=$vrnombre;
        $this->edad=$vredad;
        $this->valor_hora=$vrvalor_hora;
    }
    public function getvalor_hora(){
        return $this->valor_hora;
    }
    
    }


    ?>