<?php

echo "<b>AUTOMOVIL 1</b>"."<p>";

class Auto{
    public $marca;
    public $modelo;
    public $cilindraje;
    public $color;

    function __construct($vrmarca, $vrmodelo, $vrcilindraje, $vrcolor)
    {
        $this ->marca= $vrmarca;
        $this ->modelo= $vrmodelo;
        $this ->cilindraje= $vrcilindraje;
        $this ->color=$vrcolor;
        
        
    }

    public function getMarca(){
        return $this ->marca;
    }
    public function getModelo(){
            return $this ->modelo;
    }
    public function getCilindraje(){
        return $this ->cilindraje;
    }
    public function getColor(){
        return $this ->color;
    }
    
    public function getPagosoat(){
        $pagosoat=0;
        if ($this->cilindraje <=1200 and $this->modelo <=2011) {
            $pagosoat=250000;
            echo "$". $pagosoat;
        } elseif ($this->cilindraje <=1500 and $this->modelo <=2011) {
            $pagosoat = 450000;
            echo "$". $pagosoat;
        } elseif ($this->cilindraje >=2500 and $this ->modelo <=2010){
            $pagosoat = 359300;
            echo "$". $pagosoat;
        }elseif ($this->cilindraje >=2500 and $this ->modelo >2010){
            $pagosoat = 580000;
            echo "$". $pagosoat;
        }
    }
}

$vehiculo= new Auto('Renault','2009', '1200', 'negro');

echo  'La marca de su auto es:' . "<br>". $vehiculo-> getMarca(). "<p>";
echo 'Su auto es modelo:'. "<br>" . $vehiculo -> getModelo(). "<p>";
echo 'El cilindraje de su auto es:'. "<br>" . $vehiculo -> getCilindraje(). "<p>";
echo 'El color de su auto es:'. "<br>". $vehiculo -> getColor() . "<p>";
echo ' Es el valor de su pago de soat:'. $vehiculo->getPagosoat() ."<p>";

echo "<b>AUTOMOVIL 2</b>"."<p>";

$vehiculo2= new Auto('Clio','2010', '1500', 'gris');
echo  'La marca de su auto es:' . "<br>". $vehiculo2-> getMarca(). "<p>";
echo 'Su auto es modelo:'. "<br>" . $vehiculo2 -> getModelo(). "<p>";
echo 'El cilindraje de su auto es:'. "<br>" . $vehiculo2 -> getCilindraje(). "<p>";
echo 'El color de su auto es:'. "<br>". $vehiculo2 -> getColor() . "<p>";
echo ' Es el valor de su pago de soat:'. $vehiculo2->getPagosoat() ."<p>";


?>