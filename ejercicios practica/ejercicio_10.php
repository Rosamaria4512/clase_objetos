<?php
$nombre=$_REQUEST["nombre"];
$salario=$_REQUEST["salario"];
$valor_hora=$_REQUEST["valor_hora"];
$extras_diurnas=$_REQUEST["extras_diurnas"];
$extra_nocturna=$_REQUEST["extra_nocturna"];

if ($salario+($valor_hora*0.05)and $salario+($valor_hora*0.10)) {
    $total_h=$valor_hora*$extras_diurnas;
    $aumento=$total_h* 0.05;
    $total_aum=$total_h + $aumento;
    $total_hrs=$valor_hora*$extra_nocturna;
    $incremento=$total_hrs* 0.10;
    $total_incre=$total_hrs+$incremento;
    $total_sal=$salario+$total_aum+$total_incre;
    
    echo"<p>Buen dia bienvenid@ <p>";
    echo"<p>Señor@ $nombre Su salario basico es de: $salario<p>";
    echo"<p>el valor de sus horas extras diurnas es : $total_aum<p>";
    echo"<p>el valor de sus horas extras nocturnas es $total_incre<p>";
    echo"su salario total devengado es: $total_sal";
}
?>