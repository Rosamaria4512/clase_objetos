<?php

require_once("03_persona.php");

class Cliente extends Persona {

    protected $credito;

    function __construct($vrnombre, $vredad, $vrid,  $vrcredito)
    {
        parent:: __construct($vrnombre,$vredad, $vrid);
        $this->credito=$vrcredito;
    }
 public function getcredito(){
    return $this->credito;

 }
}
?>