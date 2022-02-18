<?php

require_once("01_clasecliente.php");

class Usuario extends Cliente {

    protected $email;
    protected $password;

    function __construct($vrnombre,$vrcedula, $vrsalario,$vremail, $vrpassword){
    

        parent:: __construct($vrnombre,$vrcedula, $vrsalario);
        $this->email=$vremail;
        $this->password=$vrpassword;
    }
    public function getemail(){
        return $this->email;
    }
    public function setemail($vremail){
    $this->email=$vremail;
    }
    
}
?>