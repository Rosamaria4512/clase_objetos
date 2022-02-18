<?php

class Producto{
    public $Descripcion;
    protected $Precio;
    public $stock_minimo;
    static $Status ="activo";


//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct(string $vrDescripcion,int $vrPrecio, $vrStatus)
    {

        $this->Descripcion=$vrDescripcion;
        $this->Precio=$vrPrecio;
        $this->stock_minimo=3;
        Producto:: $Status = $vrStatus;
    }
    public function getProducto(){
         $arrayProducto  = array (
            'Descripcion: ' =>$this ->Descripcion,
            'Precio: ' =>$this ->Precio,
            'stock_minimo: ' =>$this ->stock_minimo,
            'Status: ' =>Producto::$Status,
            
        );
        return $arrayProducto;
    }
         public function getPrecio(){
            return $this->Precio;
        }
        public function setPrecio($vrPrecio){
            $this->Precio=$vrPrecio;
        }
        
        
    }
?>