<<?php

require_once("01_clasejugador.php");

class Futbol extends Jugador {

    protected $estatura;
    protected $edad;

    function __construct($vrNombre,$vrCelular, $vrEmail,$vrestatura,$vredad)
    {
    

        parent:: __construct( $vrNombre,$vrCelular, $vrEmail,$vrestatura, $vredad);
        
        $this->estatura=$vrestatura;
        $this->edad=$vredad;
    }
    public function getestatura(){
        return $this->estatura;
    }
    public function getedad(){
        return $this->edad;
    }
}