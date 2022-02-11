<?php

require_once("02_cliente.php");

$objcliente = new cliente("Milton","1061785948","milton@gmail.com","activo" , 23);
$objcliente->getcliente();

print_r('<pre>');
print_r($objcliente);
print_r('</pre>');


echo "<br>";
echo "Su Email es: "  .   $objcliente ->setEmail  (" milton@gmail.com");
echo $objcliente->getEmail();

echo "<br>";
echo "Su fecha de registro es: "  .   $objcliente ->setfecha_registro("10 febrero 2021");
echo $objcliente->getfecha_registro();

echo "<br>";
echo "Su clave es : "  .   $objcliente ->setclave("234564");
echo $objcliente->getclave();

?>