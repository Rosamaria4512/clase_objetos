#calculo reparto anual de ultilidades
<?php
echo"<p>";
$vrnombre=$_REQUEST["nombre"];
$vrsalario=$_REQUEST["salario"];
$vrAntiguedad=$_REQUEST["Antiguedad"];
echo"Nombre: $vrnombre <p>";
if ($vrAntiguedad<1) {
    $utilidad=$vrsalario*0.05;
    $total_s=$utilidad+$vrsalario;
    echo"Utilidad: $utilidad <br>";
    echo"Salario total: $total_s";

}elseif ($vrAntiguedad>=1 and $vrAntiguedad<2) {
    $utilidad=$vrsalario*0.07;
    $total_s=$utilidad+$vrsalario;
    echo"Utilidad: $utilidad <br>";
    echo"Salario total: $total_s";

}elseif ($vrAntiguedad>=2 and $vrAntiguedad<5) {
    $utilidad=$vrsalario*0.10;
    $total_s=$utilidad+$vrsalario;
    echo"Utilidad: $utilidad<br>";
    echo"Salario total: $total_s";
    
}elseif ($vrAntiguedad>=5 and $vrAntiguedad<10) {
    $utilidad=$vrsalario*0.15;
    $total_s=$utilidad+$vrsalario;
    echo"Utilidad: $utilidad<br>";
    echo"Salario total: $total_s";
    
}elseif ($vrAntiguedad>=10) {
    $utilidad=$vrsalario*0.20;
    $total_s=$utilidad+$vrsalario;
    echo"Utilidad: $utilidad<br>";
    echo"Salario total: $total_s";
    
}
?>