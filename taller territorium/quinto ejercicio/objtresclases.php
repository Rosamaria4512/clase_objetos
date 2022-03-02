<?php

require_once("01_clasePersona.php");
require_once("02_claseEmpleado.php");
require_once("03_claseContador.php");

echo"<h2>DATOS DE PERSONA</h2>";
$objPersona = new Persona ("Milton",23 );
$objPersona->getPersona();

print_r('<pre>');
print_r($objPersona);
print_r('</pre>');

echo"<h2>DATOS DEL EMPLEADO</h2>";
$objEmpleado= new Empleado("milton" ,23, 10000);
echo "Señ@r: " . $objEmpleado->Nombre . "<br>";
echo "el valor de una hora trabajada es de  : " ."$" . $objEmpleado->getvalor_hora();

echo"<h2>DATOS DEL CONTADOR</h2>";
$objContador= new Contador("milton",23, 10000,30);
echo "Señ@r: " . $objContador->Nombre . "<br>";
echo "total a pagar por dias laborados es: ". "$" . $objContador->getDiastrabajados();