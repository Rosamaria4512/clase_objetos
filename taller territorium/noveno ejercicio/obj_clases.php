<?php

require_once("01_torneo_futbol.php");
require_once("02_clasepartidos.php");


echo"<h2>DATOS DEl EQUIPO</h2>";
$objTorneo_futbol = new Torneo_futbol("UNIVERSITARIO DE POPAYAN", 11);
$objTorneo_futbol->getTorneo_futbol();
print_r('<pre>');
print_r($objTorneo_futbol);
print_r('</pre>');
echo"<h2>DATOS DEl PARTIDO</h2>";
$objPartido = new Partido("UNIVERSITARIO DE POPAYAN", 11,3, 9);
print_r('<pre>');
print_r($objPartido);
print_r('</pre>');

echo "su equipo: "  . $objPartido->getclasificacion();

