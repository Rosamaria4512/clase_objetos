<?php

require_once("01_auto.php");

$objAuto = new Auto("Renault","KAR182", 2000, 10000, 70,30);
$objAuto->getAuto();

print_r('<pre>');
print_r($objAuto);
print_r('</pre>');

echo "<br>";
echo $objAuto->getMarca();
echo "<br>";
echo "La marca de su Auto es"  .   $objAuto ->setMarca  (" CLIO");
echo $objAuto->getMarca();


echo "<br>";
echo "La placa de su Auto es" .   $objAuto ->setPlaca  (" SER456 ");
echo $objAuto->getPlaca();

echo "<br>";
echo "El modelo de su Auto es " .  $objAuto  -> modelo;
echo "<br>";

echo 'la distancia recorrida es: ' . $objAuto ->getDistancia();

echo "<br>";
$objAuto->setPlaca("GTY-256");
echo "placa actualizada del auto es: " . $objAuto->getPlaca();
echo "<br>";
 

?>