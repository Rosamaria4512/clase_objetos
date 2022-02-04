#calculo de saldo total por cantidad de horas trabajadas

<?php
echo "<p>";
echo "BIENVENIDOS <p>";
$vrnombre=$_REQUEST["nombre"];
$vrhoras =$_REQUEST["horas"];
$vrpago_h=$_REQUEST["pago_h"];
$horas_n=140;
echo"Nombre: <br>".$vrnombre."<p>";

if ($vrhoras<140) {
    $sueldo=$vrpago_h*$vrhoras;
    echo"su sueldo total es: $sueldo";
}elseif ($vrhoras>140 and $vrhoras<=148) {
    $extras=$vrhoras-$horas_n;
    $doble=$extras*($vrpago_h*2);
    $sueldo=($vrpago_h *140)+ $doble;
    echo "Pago horas extras: ".$doble. "<br>";
    echo"Saldo total: ".$sueldo;
}elseif ($vrhoras>148) {
    $extras=$vrhoras-$horas_n;
    $doble= ($vrpago_h*2)*8;
    $triple=($vrpago_h*3)*($extras-8);
    $sueldo=($vrpago_h *140)+ $doble + $triple;
    echo "Pago horas extras: ". ($doble + $triple)."<br>";
    echo"Saldo total: ".$sueldo;
}


?>