<?php

class Jugador{
    public $Nombre;
    protected $Celular;
    public $Email;
    


//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct($vrNombre,$vrCelular, $vrEmail)
    {

        $this->Nombre=$vrNombre;
        $this->Celular=$vrCelular;
        $this->Email=$vrEmail;
        
    }
    public function getJugador(){
         $arrayJugador  = array (
            'Nombre: ' =>$this ->Nombre,
            'Celular: ' =>$this ->Celular,
            'Email: ' =>$this -> Email,
           
            
        );
        return $arrayJugador;
    }
    public function getCelular(){
        return $this->Celular;
    }
    public function setCelular($vrCelular){
        $this->Celular=$vrCelular;
    }
}