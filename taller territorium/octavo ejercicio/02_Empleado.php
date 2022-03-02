<?php

require_once("01_clasepersona.php");

class Empleado extends Persona {


    public $sueldo;
    private $estado;

    function __construct($vrnombre, $vredad,$vrsueldo,$vrestado){
    

        parent:: __construct($vrnombre, $vredad,$vrsueldo,$vrestado);
        $this->nombre=$vrnombre;
        $this->edad=$vredad;
        $this->sueldo=$vrsueldo;
        $this->estado=$vrestado;
    }
    public function getsueldo(){
        return $this->sueldo;
    }
    public function getestado(){
        return $this->estado;
    }
    public function setestado($vrestado){
        $this->estado=$vrestado;
    }
    
    }
