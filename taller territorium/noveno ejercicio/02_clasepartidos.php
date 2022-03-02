<?php

require_once("01_torneo_futbol.php");

class Partido extends Torneo_futbol {


    public $partido_ganados;
    public $puntos_ganados;
    

    function __construct($vrnombre_equipo, $vrnumero_integrantes,  $vrpartido_ganados, $vrpuntos_ganados){

        parent:: __construct($vrnombre_equipo, $vrnumero_integrantes,$vrpartido_ganados,$vrpuntos_ganados);
        $this->partido_ganados=$vrpartido_ganados;
        $this->puntos_ganados=$vrpuntos_ganados;
    

    }
         public function getpartido_ganados(){
             return $this->partido_ganados;
         }
         public function setpartido_ganados($vrpartido_ganados){
            $this->partido_ganados=$vrpartido_ganados;
         }
         public function getpuntos_ganados(){
             return $this->puntos_ganados;
         }
         public function setpuntos_ganados($vrpuntos_ganados){
            $this->puntos_ganados=$vrpuntos_ganados;
         }

         public function getclasificacion(){
             if($this->getpuntos_ganados()<15){
             $this->clasificacion="descendio";
             }else{
             $this->clasificacion="ascendio";
         }
         return $this->clasificacion;
        } 
}
