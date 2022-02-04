<?php
//Que me permita contar en forma decreciente los numeros del 50 al 30 de 1 en 1

for ($i = 50; $i > 30; --$i) {
    echo $i . "<br>";
}

//Variable $contador tome los valores de 1 a 5 y muestre en pantalla el db
//2,4,5,6,8


?>

<?php
echo "Incremento de un numero de 2 en 2 hasta 10";

$a = 0;
while ($a <= 10) {
    echo $a . "<br>";
    $a = $a + 2;
}
?>

<?php
echo "Ciclo while contador de los primeros 20 numeros" . "<br>";

$numero = 0;
$suma = 0;
while ($numero <= 5) {
    $suma = $suma + $numero;
    $numero++;
    echo $numero . "<br>";
}
echo "la suma de los primeros 20 numeros es: " . $suma;

?>

<?php
echo "cliclo que me permita contar los numeros apartir del 8 hasta el 32 de 4 en 4" . "<br>";
$a = 7;
while ($a <= 31) {
    $a++;
    echo $a . "</br>";
}
?>

<?php

echo "Calcular el factorial del numero 7*6*5*4*3*2*1";
$a = 1;
$b = 1;
while ($a <= 7) {

    $a++;
    echo $b . "<br>";
    $b = $a * $b;
}
?>

<?php
echo "Calcular el factorial del numero 7*6*5*4*3*2*1"."<br>";
$num = 7;
$fact = 1;
$k = $num;

while ($k >= 1) {
    $fact = $fact * $k;
    echo $k--."<br>";
}
echo $fact;
?>
