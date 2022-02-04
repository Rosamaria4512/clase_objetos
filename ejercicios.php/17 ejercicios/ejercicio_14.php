<?php
echo"<h2> ARTICULOS DE FERRETERIA </h2>";
$P1=$_REQUEST["precio1"];
$P2=$_REQUEST["precio2"];
$P3=$_REQUEST["precio3"];
$P4=$_REQUEST["precio4"];
$P5=$_REQUEST["precio5"];
#1 Dolar equivale a 3953.55 pesos:
$Dolar=3953.55;

#suma de los 5 articulos:
$suma=$P1+$P2+$P3+$P4+$P5;
echo" La suma de los 5 articulos es $suma Dolares";

#total ventas en pesos:
$total=$suma*$Dolar;
echo" <p> El total de la venta es $total pesos";

?>