<?php

require_once("01_clasezapatos.php");

class Deportivo extends Zapatos {


    public $descripcion;
    private $precio;
    public $cantidad;

    function __construct($vrtalla, $vrmarca, $vrstock, $vrdescripcion,$vrprecio,$vrcantidad){


        parent:: __construct($vrtalla, $vrmarca, $vrstock, $vrdescripcion,$vrprecio,$vrcantidad);
        $this->descripcion=$vrdescripcion;
        $this->precio=$vrprecio;
        $this->cantidad=$vrcantidad;
    }
    public function getinventario(){
        if($this->cantidad<$this->stock){
            $venta="No se puede realizar venta";
        }elseif ($this->cantidad>$this->stock) {
            $venta="Su Venta es exitosa";


        }
        return $venta;
    }
}