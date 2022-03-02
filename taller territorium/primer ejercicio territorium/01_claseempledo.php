<?php



echo "<b>Empleado </b>"."<p>";

class Empleado{
    public $Nombre;
    protected $celular;
    private $cargo;
    private $sueldo;
    static $auxilio_transporte = 0.05;

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct( $vrnombre,$vrcelular, $vrcargo, $vrsueldo, $vrauxilio_transporte )
    {

        $this->Nombre=$vrnombre;
        $this->celular=$vrcelular;
        $this->cargo=$vrcargo;
        $this->sueldo=$vrsueldo;
        Empleado::$auxilio_transporte;
       

    }
    public function getEmpleado(){
         $arrayEmpleado  = array (
                                'Nombre: ' =>$this ->Nombre,
                                'celular: ' =>$this ->celular,
                                'cargo: '=>$this->cargo,
                                'sueldo:'=>$this->sueldo,
                            
         );
         return $arrayEmpleado;
     }
     public function getNombre(){
         return $this->Nombre;
     }
     public function setNombre($vrnombre){
         $this->Nombre=$vrnombre;
     }
     public function getcelular(){
        return $this->celular;
    }
    public function setcelular($vrcelular){
        $this->celular=$vrcelular;
    }

    public function getDatosEmpleado(){
        $arrayDatosEmpleado  = array (
                           'Cargo: ' =>$this ->Cargo,
                           'Sueldo: ' =>$this ->Sueldo,
        );
        return $arrayDatosEmpleado;

    }
    public function getsueldo(){
        return $this->sueldo;
    }
    
    public function Retefuente()
    {
        if ($this->sueldo > 3750000) {
            echo $this->sueldo;
            echo "<br>";
            $sueldo = ("Debe pagar una retencion en la fuente del 9%");
        } else {
            echo $this->sueldo;
            echo "<br>";
            $sueldo = (" No debe pagar retencion en la fuente");
        }
        return $sueldo;
    //public function sueldo($vrsueldo){
      //  if($this->sueldo> 37500000){
        //    $this->sueldo= $this->sueldo*0.09;




      }   


}
?>