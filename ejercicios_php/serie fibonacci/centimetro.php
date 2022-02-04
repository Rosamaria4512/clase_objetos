<?php

print ("convertir medidas"). "<P>";

$valor= 15000;
$unidad_inicial = "cm";
$unidad_transformar = "metros";

function transformar_unidad_medida($vrvalor,$vrunidad_inicial,$vrunidad_transformar){
    if($vrunidad_inicial=="cm" and $vrunidad_transformar== "metros"){
        $tranformar_u= $vrvalor/100;
         return $tranformar_u;
        
        
    }

}

echo transformar_unidad_medida($valor,$unidad_inicial,$unidad_transformar);



?>