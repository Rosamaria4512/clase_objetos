<?php

echo "<b>TRABAJADOR 1</b>"."<p>";

class trabajador{
    public $Nombre;
    public $Cargo;
    public $email;
    public $estado;
    public $fecha_regitro;
    public $clave_acceso;

    function __construct(string $vrnombre,string $vrcargo, string $vremail, string $vrestado)
    {

        $this->Nombre=$vrnombre;
        $this->cargo=$vrcargo;
        $this->email=$vremail;
        $this->estado=$vrestado;
        $this->clave_acceso=rand();
        
        
    }

    public function getNombre(){
        return $this ->Nombre;
    }
    public function getCargo(){
        return $this ->cargo;
    }
    public function getEmail(){
        return $this ->email;
    }
    public function getEstado(){
        return $this ->estado;
    }
    public function Fecha_registro(){
    echo date ('d-m-Y')."<br>";

    }
    public function getClave_acceso(){
    return $this ->clave_acceso;
    }
}


$datos_trabajador = new trabajador ('Milton Meneses', 'aux bodega','miltonerneymeneses@gmail.com', 'activo');

echo  'Su Nombre:' . "<br>". $datos_trabajador-> getNombre(). "<p>";
echo  'Su Cargo:' . "<br>". $datos_trabajador-> getCargo(). "<p>";
echo  'Su Email:' . "<br>". $datos_trabajador-> getEmail(). "<p>";
echo  'Su estado es:' . "<br>". $datos_trabajador-> getEstado(). "<p>";
echo   ' Su Fecha de Registro:' . "<br>". $datos_trabajador->  Fecha_registro(). "<p>";
echo  'Su Clave de acceso es:' . "<br>". $datos_trabajador-> getClave_acceso(). "<p>";

echo "<b>TRABAJADOR 2</b>"."<p>";
    
$datos_trabajador2 = new trabajador ('Carlos Ledezma', 'Arquitecto','kr_rlos@gmail.com', 'activo');
echo  'Su Nombre:' . "<br>". $datos_trabajador2-> getNombre(). "<p>";
echo  'Su Cargo:' . "<br>". $datos_trabajador2-> getCargo(). "<p>";
echo  'Su Email:' . "<br>". $datos_trabajador2-> getEmail(). "<p>";
echo  'Su estado es:' . "<br>". $datos_trabajador2-> getEstado(). "<p>";
echo   ' Su Fecha de Registro:' . "<br>". $datos_trabajador2->  Fecha_registro(). "<p>";
echo  'Su Clave de acceso es:' . "<br>". $datos_trabajador2-> getClave_acceso(). "<p>";



?>