<?php
echo"PORCENTAJE DE HOMBRES Y MUJERES"."<p>";

$vrhombres = $_REQUEST["hombres"];
$vrmujeres = $_REQUEST["mujeres"];

$total = $vrhombres + $vrmujeres;

$porcentaje1 = $vrhombres / $total * 100;
$porcentaje2 = $vrmujeres / $total * 100;

echo " El porcentaje de hombres es: ".$porcentaje1. "<p>";
echo " El porcentaje de mujeres es: ".$porcentaje2. "<p>";


echo '<a href="http://localhost/Adsi_2338368-Rosa/formulario_04.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'
?>