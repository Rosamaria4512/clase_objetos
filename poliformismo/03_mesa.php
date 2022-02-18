<?php
require_once("01_pproducto.php");
require_once ("03_mesa.php");

class Mesa extends Mueble{
    public $forma;
    public $tamaño;
    
    function __construct($vrDescripcion,$vrPrecio, $vrStatus, $vrcolor,$vrmaterial,$vrforma,$vrtamaño)
    {
        //llevo los datos al constructor de clase usuario 
        parent:: __construct($vrDescripcion,$vrPrecio, $vrStatus,$vrcolor,$vrmaterial);
        $this->forma=$vrforma;
        $this->tamaño=$vrtamaño;

    }
}