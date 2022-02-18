<?php

echo "<b>Cliente </b>"."<p>";

class Cliente{
    public $Nombre;
    protected $cedula;
    private $salario;

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct(string $vrnombre,int $vrcedula, $vrsalario)
    {

        $this->Nombre=$vrnombre;
        $this->cedula=$vrcedula;
        $this->salario=$vrsalario;
    }
    public function getCliente(){
         $arrayCliente  = array (
            'Nombre: ' =>$this ->Nombre,
            'cedula: ' =>$this ->cedula,
            'salario: '=>$this ->salario,
         );
         return $arrayCliente;
     }
     public function getNombre(){
         return $this->Nombre;
     }
     public function getcedula(){
         return $this-> cedula;
     }
     public function getsalario(){
        return $this->salario;
      }
     public function setsalario($vrsalario){
        $this->salario=$vrsalario;
    }
}
?>