<?php



echo "<b>Notas </b>"."<p>";

class Aprendiz{
    public $Nombre;
    public $apellidos;
    private $identidad;
    private $asignatura;
    public $primer_parcial; 
    public $segundo_parcial;
    public $examen_final;

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct($vrnombre,$vrapellidos, $vridentidad, $vrasignatura, $vrprimer_parcial, $vrsegundo_parcial, $vrexamen_final )
    {

        $this->Nombre=$vrnombre;
        $this->apellidos=$vrapellidos;
        $this->identidad=$vridentidad;
        $this->asignatura=$vrasignatura;
        $this->primer_parcial=$vrprimer_parcial;
        $this->segundo_parcial=$vrsegundo_parcial;
        $this->examen_final=$vrexamen_final;
    }
        public function getAprendiz(){
            $arrayAprendiz  = array (
                                   'Nombre: ' =>$this ->Nombre,
                                   'apellidos: ' =>$this ->apellidos,
                                   'indentidad: '=>$this->identidad,
                                   'asignatura:'=>$this->asignatura,
                                   'primer_parcial: '=>$this->primer_parcial,
                                   'segundo_parcial:'=>$this->segundo_parcial,
                                   'examen_final:'=>$this->examen_final,

                               
            );
            return $arrayAprendiz;
       

    }
    public function getDefinitiva(){
            $this->Definitiva=($this->primer_parcial*0.3)+($this->segundo_parcial*0.3)+($this->examen_final*0.4);
            return $this->Definitiva;
        }
    public function getConceptoValorativo(){
        if($this->Definitiva<2.9){ 
            $this->Definitiva="Malo";
         }elseif ($this->Definitiva >=3 or $this->Definitiva<4){
             $this->Definitiva="Aceptable";
            }
            elseif ($this->Definitiva >=4 or $this->Definitiva<4.5){
                $this->Definitiva="Excelente";
            }
            return $this->Definitiva;
    }       # code...
    public function getValoracionCualitativa(){
        if($this->getDefinitiva()<3.4){
            $this->Definitiva="Reprobo";
        }elseif($this->getDefinitiva()>3.5){
            $this->Definitiva="Aprobo";
        }
        return $this->Definitiva;
        

    }

    

}

    ?>