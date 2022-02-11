<?php

echo "<b>persona 1</b>"."<p>";

class Persona{
    public $Nombre;
    protected $edad;
    private $id;

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct(string $vrnombre,string $vredad, $vrid)
    {

        $this->Nombre=$vrnombre;
        $this->edad=$vredad;
        $this->id=$vrid;
    }
     public function getpersona(){
         $arraypersona  = array (
            'Nombre: ' =>$this ->Nombre,
            'edad: ' =>$this ->edad,
            'id: '=>$this ->id,
         );
         return $arraypersona;
     }
     public function getid(){
        return $this->id;
      }
  
      public function setid($id){
          $this->id = $id;
      }
      public function getedad(){
          return $this->edad;
      }
      public function setedad($edad){
          $this->edad=$edad;
      }
    
        # code...
    
}
?>