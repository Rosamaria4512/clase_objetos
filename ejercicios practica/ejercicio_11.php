<?php

$duracion_min=$_REQUEST["duracion_min"];

if ($duracion_min >=1 and $duracion_min <=5) {
    $total_pago=$duracion_min*50;
    echo"total a pagar por su llamada: $total_pago pesos";

}elseif ($duracion_min >=6 and $duracion_min<=10) {
    $total_pago=$duracion_min*40;
    echo"total a pagar por su llamada: $total_pago pesos";

}elseif ($duracion_min >=11 and $duracion_min<=20) {
    $total_pago=$duracion_min*30;
    echo"total a pagar por su llamada: $total_pago pesos";

}elseif ($duracion_min >=21) {
    $total_pago=$duracion_min*25;
    echo"total a pagar por su llamada: $total_pago pesos";

}
    


?>