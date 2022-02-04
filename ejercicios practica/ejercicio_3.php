<?php
$nombre=$_REQUEST["nombre"];
$fecha_nacimiento=$_REQUEST["fecha_nacimiento"];
$nota1=$_REQUEST ["nota1"];
$nota2=$_REQUEST["nota2"];
$nota3=$_REQUEST["nota3"];

echo "Estudiante: $nombre <br>";

$edad=(2021-$fecha_nacimiento);
echo "Edad: $edad años <br>";

$definitiva=($nota1+$nota2+$nota3)/3;
echo "Nota definitiva: $definitiva ";

?>