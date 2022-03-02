<?php

echo "<b>Persona </b>"."<p>";

class Persona{
    public $Nombre;
    protected $edad;
    

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct( $vrnombre, $vredad)
    {

        $this->Nombre=$vrnombre;
        $this->edad=$vredad;
    }
    public function getPersona(){
         $arrayPersona  = array (
            'Nombre: ' =>$this ->Nombre,
            'edad: ' =>$this ->edad,
        );
         return $arrayPersona;

    }
}
?>