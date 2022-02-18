<<?php

require_once("01_pproducto.php");

class Mueble extends Producto {

    protected $color;
    protected $material;

    function __construct($vrDescripcion,$vrPrecio, $vrStatus, $vrcolor,$vrmaterial)
    {
    

        parent:: __construct( $vrDescripcion,$vrPrecio, $vrStatus);
        
        $this->color=$vrcolor;
        $this->material=$vrmaterial;
    }
    public function getcolor(){
        return $this->color;
    }
    
    
    
}