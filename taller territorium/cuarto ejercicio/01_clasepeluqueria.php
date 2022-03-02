<?php

echo "<b>Peluqueria </b>"."<p>";

class Peluqueria {
    public $id_peluqeria;
    protected $nombre;
    private $direccion;
    public $telefono;
    public $hora_inicio;
    public $hora_cierre;
    public $servicio;
    public $valor_corte;


//metodo constructor INT es paara numero entero, STRING recibir cadena de caracteres,FLOAT para decimales

    function __construct($vrid_peluqueria, $vrnombre, $vrdireccion,$vrtelefono,$vrhora_inicio,$vrhora_cierre,$vrservicio,$vrvalor_corte)
    {

        $this->id_peluqueria=$vrid_peluqueria;
        $this->nombre=$vrnombre;
        $this->direccion=$vrdireccion;
        $this->telefono=$vrtelefono;
        $this->hora_inicio=$vrhora_inicio;
        $this->hora_cierre=$vrhora_cierre;
        $this->servicio=$vrservicio;
        $this->valor_corte=$vrvalor_corte;
    }
    public function getPeluqueria(){
         $arrayPeluqueria  = array (
                                    'id_peluqueria: ' =>$this->id_peluqueria,
                                    'nombre: '=>$this->nombre,
                                    'direccion: '=>$this->direccion,
                                    'telefono: '=>$this->telefono,
                                    'hora_inicio: '=>$this->hora_inicio,
                                    'hora_cierre: '=>$this->hora_cierre,
                                    'servicio: ' =>$this->servicio,
                                    'valor_corte: ' =>$this->valor_corte,
         );
         return $arrayPeluqueria;
     }
    public function getAgendarcita(){
    $arrayAgendarcita  = array (
                            'servicio: ' =>$this->servicio,
                            'valor_corte: ' =>$this->valor_corte,
    );

    return $arrayAgendarcita;
    }
    public function getservicio(){
        return $this->servicio;
    }
    public function setservicio($vrservicio){
        $this->servicio=$vrservicio;
    }
    public function getvalor_corte(){
        return $this->valor_corte;
    }
    public function setvalor_corte($vrvalor_corte){
        $this->valor_corte=$vrvalor_corte;
    }
    }

    ?>