<?php

require_once("01_clasepeluqueria.php");

$objPeluqueria = new Peluqueria("45132","mexican" ,"obando","8322323","9:00am", "8:00pm","corte niño","$7000" );
$objPeluqueria->getPeluqueria();

print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');

echo "su solicitud de servicio es : " . $objPeluqueria->getServicio() . "<br>";
echo "total a pagar por sus servicio: " . $objPeluqueria->getvalor_corte(). "<br>";
echo "<br>";
echo"su solicitd de servicio es: " . $objPeluqueria->setservicio("corte para dama");
echo $objPeluqueria->getservicio(). "<br>";
echo "total a pagar por su servicio es: " . $objPeluqueria->setvalor_corte("$10000");
echo $objPeluqueria->getvalor_corte();

