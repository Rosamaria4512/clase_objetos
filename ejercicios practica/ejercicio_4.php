<?php

$nombre=$_REQUEST["nombre"];
$tiempo_p=$_REQUEST["tiempo_p"];
$valor_p=$_REQUEST["valor_p"];
$porcentaje=0.05;

if ($valor_p*0.05) {
    $var_porcentaje= $valor_p*0.05;
    $var_prestamo=$var_porcentaje*$tiempo_p;
    $total=$var_prestamo+$valor_p;

    echo "Señor(a): $nombre. el valor de su prestamo es : $$valor_p<br>";
    echo "su valor total del prestamo con intereses son: $$total<br>";

    $porciento=$var_porcentaje*$tiempo_p;

    echo "Sus intereses son: $$porciento";
}
?>