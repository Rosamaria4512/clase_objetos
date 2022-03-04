<?php

require_once("01_clasejugador.php");
require_once("02_futbol.php");
require_once("03_clasevoleibol.php");

echo"<h2>DATOS DEL JUGADOR</h2>";
$objJugador = new Jugador("Milton Meneses","3164706984", "milton@gamil.com");
$objJugador->getJugador();
print_r('<pre>');
print_r($objJugador);
print_r('</pre>'). "<br>";
echo "Jugador " .$objJugador->Nombre . " su numero de celular es: " . $objJugador->getCelular()."<br>";
echo"el cambio de numero de celular ha sido exitoso: " . $objJugador->setCelular(3158398944);
echo $objJugador->getCelular()."<br>";

echo"<h2>DATOS FUTBOL</h2>";
$objFutbol = new Futbol("Milton Meneses","3164706984", "milton@gamil.com","1.70","24");
print_r('<pre>');
print_r($objFutbol);
print_r('</pre>'). "<br>";
echo "Jugador " .$objJugador->Nombre . " su estatura es de : " . $objFutbol->getEstatura()."<br>";
echo " su Edad es: " . $objFutbol->getEdad()."<br>";

echo"<h2>DATOS VOLEIBOL</h2>";
$objVoleibol = new Voleibol("Milton Meneses","3164706984", "milton@gamil.com","1.70","24","delantero");
print_r('<pre>');
print_r($objVoleibol);
print_r('</pre>'). "<br>";