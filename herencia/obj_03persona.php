<?php

require_once("03_persona.php");

$objpersona = new persona("Milton",23, "1061785948",);
$objpersona->getpersona();

print_r('<pre>');
print_r($objpersona);
print_r('</pre>');

echo "<br>";
echo "Su cedula es: "  .   $objpersona->getid (). "<br>";

echo "<br>";
$objpersona->setid ("101618272"). "<br>";
echo "su cambio de cedula fue exitoso : " . $objpersona->getid();


echo "<br>";
echo "Su edad es: "  .   $objpersona->getedad  ();

echo "<br>";
$objpersona->setedad("19") . "<br>";
echo "su cambio de edad fue exitoso : " . $objpersona->getedad();




