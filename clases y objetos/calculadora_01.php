<?php

class calculadora{
    #definicion de atributos
public $numero1;
public $numero2;
public $operador;
public $resultado;



    #metodo principal
    #constructor funcion que tiene es asignar los valores externo a los atributos       
public function __construct($vrnumero1, $vrnumero2)
{ //$this-> numero1, para llamar a un atributo utilizo $this->
    $this-> numero1 =  $vrnumero1;
    $this-> numero2 =  $vrnumero2;

}
    #metodo secuandario

public function suma(){
    $this-> resultado = $this-> numero1 +  $this-> numero2;
    return $this -> resultado;
    
}
public function resta(){
    $this-> resultado = $this-> numero1 -  $this-> numero2;
    return $this -> resultado;
    
} //end de la clase 
public function multiplicacion(){
    $this-> resultado = $this-> numero1 *  $this-> numero2;
    return $this -> resultado;
}
public function division(){
    $this->resultado = $this->numero1 / $this->numero2;
    return $this -> resultado;
}

}

?>
