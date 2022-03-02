<?php

require_once("01_claselibro.php");

class Revista extends Libro {


    public $edicion;
    public $numero_paginas;

    function __construct($vrcodigo,$vrNombre, $vrautor,$vredicion,$vrnumero_paginas,){
    

        parent:: __construct($vrcodigo,$vrNombre, $vrautor,$vredicion,$vrnumero_paginas,);
        $this->codigo=$vrcodigo;
        $this->Nombre=$vrNombre;
        $this->autor=$vrautor;
        $this->edicion=$vredicion;
        $this->numero_paginas=$vrnumero_paginas;
    }
    public function getNombre(){
       return  $this->Nombre;
    }
    public function setNombre($vrNombre){
         $this->Nombre=$vrNombre;
    }
    public function getautor(){
        return $this->autor;
    }
    public function setautor($vrautor){
        $this->autor=$vrautor;
   }
    public function getedicion(){
        return $this->edicion;
    }
    public function setedicion($vredicion){
        $this->edicion=$vredicion;
    }
    public function getnumero_paginas(){
        return $this->numero_paginas;
    }
    public function setnumero_paginas($vrnumero_paginas){
        $this->numero_paginas=$vrnumero_paginas;
    }
}