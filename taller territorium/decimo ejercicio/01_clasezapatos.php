<?php
echo "<b>venta de zapatos </b>"."<p>";
class Zapatos {
    public $talla;
    public $marca;
    public $stock;
    
  

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct($vrtalla, $vrmarca,$vrstock){

        $this->talla=$vrtalla;
        $this->marca=$vrmarca;
        $this->stock=$vrstock;
        
       
    }
    public function getZapatos(){
         $arrayZapatos = array (
                                    'talla'=>$this->talla,
                                    'marca'=>$this->marca,
                                    'stock'=>$this->stock,
                                    
                                    
         );
         return $arrayZapatos;
        }
    }