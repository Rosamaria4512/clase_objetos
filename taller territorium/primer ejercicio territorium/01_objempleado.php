<?php

require_once("01_claseempledo.php");

$objEmpleado = new Empleado("Mariangel","3164706984", "cajera", "4500000", "");
$objEmpleado->getEmpleado();

print_r('<pre>');
print_r($objEmpleado);
print_r('</pre>');

echo "<br>";
echo "Señ@r :" . $objEmpleado->getNombre(). "<br>";
echo "Su cambio de nombre ha sido exitoso : " . $objEmpleado ->setNombre (" Luciana");
echo $objEmpleado->getNombre();
echo "<br>";
echo "Su numero de celular es  :" . $objEmpleado->getcelular() . "<br>";
echo "Su cambio de numero ha sido exitoso : " . $objEmpleado ->setCelular (" 3106497671");
echo $objEmpleado->getCelular();
echo "<br>";
echo "porcentaje auxilio de transporte: " . Empleado::$auxilio_transporte  . "<br>";
echo $objEmpleado->Retefuente();
