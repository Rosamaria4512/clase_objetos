<?php

echo "<b>CLIENTE 1</b>"."<p>";

class cliente{
    public $Nombre;
    public $id;
    private $email;
    public $edad;
    public $estado;
    private $fecha_registro;
    private $clave_acceso;

    function __construct(string $vrnombre,string $vrid, string $vremail, string $vredad, string $vrestado)
    {

        $this->Nombre=$vrnombre;
        $this->id=$vrid;
        $this->email=$vremail;
        $this->edad=$vredad;
        $this->estado=$vrestado;
        $this->fecha_regitro= date('Y-m-d');
        $this->clave_acceso=rand();
    }
    public function getcliente(){
        $arraycliente = array(
            'Nombre: ' =>$this ->Nombre,
            'id: ' =>$this ->id,
            'email: '=>$this ->email,
            'edad: '=>$this ->edad,
            'estado:'=>$this ->estado,
            'fecha registro' =>$this->fecha_registro,
            'clave_acceso' => $this->clave_acceso,
        );

    return $arraycliente;
    }
    public function getEmail(){
        return $this->Email;
      }
  
      public function setEmail($Email){
          $this->Email = $Email;
      }
      public function getfecha_registro(){
        return $this->fecha_registro;
      }
  
      public function setfecha_registro($fecha_registro){
          $this->fecha_registro = $fecha_registro;
      

     }
     public function getclave(){
      return $this->clave;
     }

     public function setclave($clave){
        $this->clave = $clave;
     }







}

    ?>