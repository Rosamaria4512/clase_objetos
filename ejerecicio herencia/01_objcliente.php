<?php

require_once("01_clasecliente.php");

$objCliente = new Cliente("Milton","1061785948" , 1200000, );
$objCliente->getCliente();

print_r('<pre>');
print_r($objCliente);
print_r('</pre>');

echo "su cedula es:" . $objCliente-> getcedula() . "<br>";


echo "<br>";
echo "el cambio del valor de su salario fue exitoso: "  .   $objCliente ->setsalario  (" 1600000");
echo $objCliente-> getsalario();



?>