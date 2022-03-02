<?php

require_once("01_ClaseNeflix.php");

$objNeflix = new Neflix("Inframundo", "2006", "si","25 enero 2022", "4");
$objNeflix->getNeflix();


print_r('<pre>');
print_r($objNeflix);
print_r('</pre>'). "<br>";

echo "El Tiutlo de la pelicula  es : " . $objNeflix->getTitulo() . "<br>";
echo "El cambio del titulo de su pelicula es exitoso, nuevo titulo : " .$objNeflix->setTitulo("Underwold");
echo $objNeflix->getTitulo(). "<br>";
echo "año de creacion de la pelicula es: " . $objNeflix->getaño_creacion() . "<br>";
echo "¿la pelicula es alquilada? " . $objNeflix->getalquilada() . "<br>";
echo "fecha devolucion de la pelicula:    " . $objNeflix->getfecha_devolucion() . "<br>";
echo "total a pagar por el alquiler de la pelicula es : " . $objNeflix->Costodealquiler('');
