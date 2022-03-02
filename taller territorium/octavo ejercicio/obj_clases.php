<?php

require_once("01_clasepersona.php");
require_once("02_Empleado.php");


$objPersona = new Persona ("DAVID", 29);
$objPersona->getPersona();
print_r('<pre>');
print_r($objPersona);
print_r('</pre>');
echo"<h2>DATOS DE LA PERSONA</h2>";
echo "Nombre : " . $objPersona->getnombre() . "<br>";
echo "Edad: " . $objPersona->getedad();
echo"<h2>DATOS DE EMPLEADO</h2>";
$objEmpleado = new Empleado("DAVID", 29,1200000,"ACTIVO");
print_r('<pre>');
print_r($objEmpleado);
print_r('</pre>');
echo "el cambio de su estado ha sido exitoso: " . $objEmpleado->setestado("INACTIVO");
echo $objEmpleado->getestado();