<?php



echo "<b>  Cuenta neflix </b>"."<p>";

class Neflix{
    public $Titulo;
    private $año_creacion;
    private $alquilada;
    protected $fecha_devolucion;
    public $dias_alquilados;
    

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct($vrTitulo, $vraño_creacion, $vralquilada, $vrfecha_devolucion, $vrdias_alquilados)
    {

        $this->Titulo= $vrTitulo;
        $this->año_creacion=$vraño_creacion;
        $this->alquilada=$vralquilada;
        $this->fecha_devolucion=$vrfecha_devolucion;
        $this ->dias_alquilados=$vrdias_alquilados;
        
    }
        public function getNeflix(){
            $arrayNeflix = array (
                                'Titulo: ' =>$this->Titulo,
                                'año_creacion: '=>$this->año_creacion,
                                'alquilada: '=> $this->alquilada,
                                'fecha_devolucion:'=>$this->fecha_devolucion,
                                
                                 
            );
            return $arrayNeflix;
        }
        public function getTitulo(){
           return $this->Titulo;
        } 
        public function setTitulo($vrTitulo){
         $this->Titulo=$vrTitulo;
        }
        public function getaño_creacion(){
            return $this->año_creacion;
        }
        public function getalquilada(){
            return $this->alquilada;
        }
        public function getfecha_devolucion(){
            return $this->fecha_devolucion;
        }

        public function Costodealquiler(){
            if($this->dias_alquilados<=5){
            $this->Costodealquiler=$this->dias_alquilados*4000;
            }
            return $this->Costodealquiler;
        }

    }


?>