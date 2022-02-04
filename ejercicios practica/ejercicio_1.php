<?php

echo"<h2> Sueldo de Empleado   </h2>";

    $nombre = $_REQUEST["nombre"];
    $horas_t = $_REQUEST["horas_t"];
    $valor_hora=$_REQUEST["valor_hora"];
    $documento_id=$_REQUEST["documento_id"];

    echo"Señor(a): $nombre identificado(a) con Numero de documento : $documento_id <br>";
    

    $sueldo=($horas_t*$valor_hora);

    echo "Su sueldo devengado es: $sueldo";
    


    

?>