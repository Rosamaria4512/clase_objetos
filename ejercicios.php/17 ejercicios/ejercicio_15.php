<?php
echo"<h2> Puntaje del jugador </h2>";
$nombre=$_REQUEST["nombre"];
$Roja=$_REQUEST["primero"];
$Azul=$_REQUEST["segundo"];
$Amarillo=$_REQUEST["tercero"];
echo"Puntos Fichas Obtenidas:<br>";
echo"Rojas: $Roja <br>";
echo"Azules: $Azul <br>";
echo"Amarillas: $Amarillo <br>";

$total=($Roja**3+($Azul*2))-$Amarillo**2;

echo"<p>El puntaje total que $nombre obtuvo es: $total puntos";

?>