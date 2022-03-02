<?php
echo "<b>PROGRAMA PDO </b>"."<p>";
class Torneo_futbol {
    public $nombre_equipo;
    public $numero_integrantes;
  

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct($vrnombre_equipo, $vrnumero_integrantes){

        $this->nombre_equipo=$vrnombre_equipo;
        $this->numero_integrantes=$vrnumero_integrantes;
       
    }
    public function getTorneo_futbol(){
         $arrayTorneo_futbol  = array (
                                    'nombre_equipo: '=>$this->nombre_equipo,
                                    'numero_integrantes: '=>$this->numero_integrantes,
                                    
                                    
         );
         return $arrayTorneo_futbol;
        }
    }