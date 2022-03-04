<?php
require_once("01_clasejugador.php");
require_once ("02_futbol.php");

class Voleibol extends Futbol{
    public $puesto_campo;
    
    
    function __construct($vrNombre,$vrCelular, $vrEmail,$vrestatura,$vredad,$vrpuesto_campo)
    {
        
        parent:: __construct($vrNombre,$vrCelular, $vrEmail,$vrestatura,$vredad,$vrpuesto_campo);
        
        $this->puesto_campo=$vrpuesto_campo;
        

    }
}