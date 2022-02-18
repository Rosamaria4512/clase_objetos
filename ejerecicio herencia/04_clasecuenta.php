<?php

require_once ("01_clasecliente.php");

class Cuenta extends Usuario{
    public $codigo;
    public $tipo_cuenta;
    private $saldo;
    public $valor_retiro;

    function __construct($vrnombre,$vrcedula, $vrsalario,$vremail, $vrpassword, $vrcodigo,$vrtipo_cuenta, $vrsaldo)
    {
        //llevo los datos al constructor de clase usuario 
        parent:: __construct($vrnombre,$vrcedula, $vrsalario,$vremail, $vrpassword);
        $this->codigo = $vrcodigo;
        $this->tipo_cuenta =$vrtipo_cuenta;
        $this->saldo=$vrsaldo;
    }

    public function getsaldo(){
    return $this->saldo;
    }
    public function setsaldo($vrsaldo){
    $this->saldo=$vrsaldo;
    }
    public function setvalor_retiro($vrvalor_retiro){
        $this->valor_retiro = $vrvalor_retiro;
    }
    public function Retiro($vrvalor_retiro){
        if($this->saldo> $vrvalor_retiro){
            $this->saldo= $this->saldo- $this->valor_retiro;
        }elseif ($this->saldo<$this->valor_retiro){
            $this->saldo;

           
        }
           


        return $this->saldo;  
        
    }
    
        
        #$Retiro=0;
        #if ($this->saldo <=1350000);
          #echo "Retire" . $Retiro;

        #elseif($this->saldo >1350000);
        #echo "Saldo insuficiente" . $Retiro;

        
            # code...
        
    


}

?>