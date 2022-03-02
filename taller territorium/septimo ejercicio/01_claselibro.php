<?php

echo "<b>Libros </b>"."<p>";

class Libro{
    public $codigo;
    protected $nombre_libro;
    public $autor;

//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct( $vrcodigo,$vrnombre, $vrautor)
    {
        $this->codigo=$vrcodigo;
        $this->Nombre=$vrnombre;
        $this->autor=$vrautor;
    }
    public function getLibro(){
         $arrayLibro  = array (
            'codigo: '=>$this->codigo,
            'Nombre: ' =>$this ->Nombre,
            'autor: ' =>$this ->autor,
        );
         return $arrayLibro;
    }


}



?>