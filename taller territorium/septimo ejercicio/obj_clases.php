<?php

require_once("01_claseLibro.php");
require_once("02_claserevista.php");


echo"<h2>PRIMERA INSTANCIA</h2>";
$objLibro = new Libro (2334, "50 SOMBRAS DE GRAY", "E.L  JAMES" );
$objLibro->getLibro();

print_r('<pre>');
print_r($objLibro);
print_r('</pre>');
echo "codigo del libro : " . $objLibro->codigo . "<br>";
echo"<h2>SEGUNDA INSTANCIA</h2>";
$objRevista= new Revista(2334,"50 SOMBRAS DE GRAY", "E.L  JAMES",5 ,520);
echo "Nombre o titulo del libro: " .$objRevista->getNombre() . "<br>";
echo "Nombre del Autor del libro:   " .$objRevista->getautor() . "<br>";
echo"Numero de edicion del libro: " . $objRevista->setedicion(6);
echo $objRevista->getedicion() . "<br>";
echo "El libro tiene " . $objRevista->getnumero_paginas() . " paginas";
echo"<h2>TERCERA INSTANCIA</h2>";
$objRevista2= new Revista(4545,"EL SOLDADO NO TIENE QUIEN LE ESCRIBA", "GABRIEL GARCIA MARQUEZ",3 ,400);
echo "Nombre o titulo del libro: " .$objRevista2->getNombre() . "<br>";
echo "Nombre del Autor del libro: " .$objRevista2->getautor() . "<br>";
echo"Numero de edicion del libro: " . $objRevista2->setedicion(3);
echo $objRevista->getedicion() . "<br>";
echo "El libro tiene " . $objRevista->setnumero_paginas(420);
echo $objRevista->getnumero_paginas() . " paginas"; 