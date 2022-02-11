<?php
require_once("03_persona.php");
require_once("clasecliente.php");


$objpersona = new Persona("Milton",23, "1061785948",);
$objpersona->getpersona();
echo "Su cedula es: "  .   $objpersona->getid (). "<br>";
echo "<br>";
$objpersona->setid("101618272"). "<br>";
echo "su cambio de cedula fue exitoso : " . $objpersona->getid();
echo "<br>";
echo "<br>";

echo"<h2>DATOS DEL CLIENTE<h2>";

$objcliente1= new Cliente("July Andrea Quilindo" ,32, "34331910", "july@gmail.com");
echo "Señ@r: " . $objcliente1->Nombre . "<br>";
echo "cedula cliente 1: " . $objcliente1-> getid (). "<br>";
echo "su edad es : ". $objcliente1-> getedad(). " años" . "<br>";

