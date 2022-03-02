<?php

require_once("01_aprendiz.php");

$objAprendiz = new Aprendiz("Anthony", "Meneses", 1061827914, "sociales", 1.5, 3.0, 2.8);
$objAprendiz ->getAprendiz();

print_r('<pre>');
print_r($objAprendiz);
print_r('</pre>');

echo " Aprendiz " . $objAprendiz-> Nombre . $objAprendiz-> apellidos . " su calificacion definitiva es: " . $objAprendiz->getDefinitiva() . "<br>";
echo "su calificacion es: " . $objAprendiz->getConceptoValorativo() . "<br>";
echo " Aprendiz " . $objAprendiz->Nombre .  $objAprendiz-> apellidos . " ud:  " .  $objAprendiz->getValoracionCualitativa();