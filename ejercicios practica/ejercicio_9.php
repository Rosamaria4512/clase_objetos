<?php

$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$num3=$_REQUEST["num3"];


if ($num1+$num2==$num3) {
    echo "Numeros iguales";
    
}else {
    echo "Numeros distintos";
}

?>