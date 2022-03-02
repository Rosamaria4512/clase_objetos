<?php

class Persona {
    public $nombre;
    protected $edad;
    

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct($vrnombre, $vredad){

        $this->nombre=$vrnombre;
        $this->edad=$vredad;
    }
    public function getPersona(){
         $arrayPersona  = array (
                                    'nombre: '=>$this->nombre,
                                    'edad: '=>$this->edad,
                                    
         );
         return $arrayPersona;
     }
     public function getnombre(){
         return $this->nombre;
     }
     public function getedad(){
         return $this->edad;
     }
    }