<?php

require_once("01_clasecliente.php");
require_once("02_claseusuario.php");
require_once("04_clasecuenta.php");

$objCliente = new Cliente("Jose Nelson Quilindo","10634536" , 1200000, );
$objCliente->getCliente();

echo"<br>";
echo"Señ@r : ". $objCliente->getNombre() . "<br>";
echo "su cedula es:" . $objCliente-> getcedula() . "<br>";


echo "<br>";
echo "El cambio del valor de su salario fue exitoso: "  .   $objCliente ->setsalario  (" 1600000");
echo $objCliente-> getsalario();
echo "<br>";
echo "<br>";

echo"<h2>DATOS DEL USUARIO</h2>";
$objUsuario1= new Usuario("July Andrea Quilindo" ,"34331910", "910000", "july@gmail.com", "4512");
echo "Señ@r: " . $objUsuario1->Nombre . "<br>";
echo "Su Email es : " . $objUsuario1-> getemail (). "<br>";
echo "El cambio de su Email fue exitoso: "  .   $objUsuario1 ->setemail  (" julyquilindo@hotmail.com");
echo $objUsuario1-> getemail();
echo "<br>";

echo"<h2>DATOS DE CUENTA</h2>";
$objCuenta= new Cuenta("July Andrea Quilindo" ,"34331910", "910000", "july@gmail.com", "4512","d3456", "Ahorro", 1300000);
echo "Nombre del Usuario: " . $objCuenta ->Nombre . "<br>";
echo "El cambio de su saldo fue exitoso: "  .   $objCuenta ->setsaldo (1350000);
echo $objCuenta-> getsaldo() . "<br>";
echo $objCuenta->setvalor_retiro(250000);
echo "valor a retirar: " . $objCuenta->valor_retiro . "<br>";
echo $objCuenta->Retiro(250000);




