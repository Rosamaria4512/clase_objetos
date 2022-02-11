<?php

echo "<b>persona 1</b>"."<p>";

class persona{
    public $Nombre;
    public $edad;
    private $id;


    function __construct(string $vrnombre,string $vredad, string $vrid)
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
     
    
        # code...
    
}
?>