<?php

echo "<b>AUTO </b>"."<p>";

class   Auto {
    private $marca;
    public $placa;
    public $modelo;
    public $kilometraje;
    public $velocidad;
    public $tiempo;
    


    function __construct($vrmarca, $txtplaca, $vrmodelo, $vrkilometraje, $vrvelocidad, $vrtiempo){
        
        $this ->marca= $vrmarca;
        $this ->placa= $txtplaca;
        $this ->modelo= $vrmodelo;
        $this ->kilometraje= $vrkilometraje;
        $this ->fecha_registro = date('Y-m-d');
        $this ->velocidad = $vrvelocidad;
        $this ->tiempo = $vrtiempo;
        
    }
    public function getAuto(){
        $arrayAuto = array(
            'Placa: ' =>$this ->placa,
            'marca: ' =>$this ->marca,
            'modelo: '=>$this ->modelo,
            'kilometraje: '=>$this ->kilometraje,
            'fecha registro' =>$this ->fecha_registro,
        );

    
    return $arrayAuto;
    }

    

    public function getDistancia(){
        $vrdistancia=$this->velocidad *$this->tiempo;
        return $vrdistancia;
    }

    public function getMarca(){
      return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }



}
   
    





     
?>
