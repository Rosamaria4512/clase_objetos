<?php
$nombre=$_REQUEST["nombre"];
$P_Diaria=$_REQUEST["produccion"];
$num=$_REQUEST["semana"];
$cajas=$P_Diaria/12;
$semana=$cajas*7;

if ($num=="1") {
    echo"En un dia se utilizan $cajas cajas <br>";
    echo"En una semana  $nombre necesitara $semana cajas <br>";
}else {
    $total=$semana*$num;
    echo"En un dia se utilizan $cajas cajas <br>";
    echo"En $num semanas $nombre necesitara $total cajas";
}


?>