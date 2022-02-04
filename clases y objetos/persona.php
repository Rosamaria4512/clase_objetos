<?php

class person{
    public $firstName;
    public $lastName;


    function __construct($vrfirstName, $vrlastName)
    {
        $this->firstName = $vrfirstName;
        $this->lastName = $vrlastName;

    }


    function getFullname(){
        return strtoupper($this ->firstName).' '.strtoupper($this->lastName);
        
    }

}

$person1= new person('Dulio' , 'perez');

$person2 = new person('Alejandra' , 'Perez');

$person3 = new person('Jaime' , 'Cortez');



echo $person1->getFullName(). "<br>";
echo $person2->getFullName(). "<br>";
echo $person3->getFullName();





?>