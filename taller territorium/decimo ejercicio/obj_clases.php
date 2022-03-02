<?php

require_once("01_clasezapatos.php");
require_once("02_deportivos.php");


$objZapatos = new Zapatos (34,"JORDAN", 40);
$objZapatos->getZapatos();
print_r('<pre>');
print_r($objZapatos);
print_r('</pre>');
echo"<h2>DATOS DEl ZAPATO</h2>";
$objDeportivo = new Deportivo (34,"JORDAN", 40,"Tenis, tipo bota de color blanca y morado para mujer","$210.000",20);
print_r('<pre>');
print_r($objDeportivo);
print_r('</pre>');
echo $objDeportivo->getinventario();