<?php

$a = 0;
$contador = 0;
while ($a < 10) {
    //$a = $a+1;
    $a++;
    $contador = $contador + $a;
    echo $a . "<br>";
}
echo $contador;
echo "<br><br>";
?>

<?php
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

?>

<?php
echo "<br><br>";
$a = 0;
do {
    $a = $a + 1;
    echo $a . "<br>";
} while ($a <= 10);
?>

<?php
echo "<br><br>";
//1,1,2,3,5
$j = 1;
$i = 0;
$c = 0;
$a = 0;

while ($a <= 10) {
    $a = $a + 1;
    echo $j;
    $c = $i + $j;
    $j = $j + $c;
    echo $c;
}

?>

<?php
echo "<br><br>";
//1,1,2,3,5
$n1 = 0;
$n2 = 1;
$contador = 0;
$a = 0;

while ($a <= 20) {
    $a++;
    $contador = $n1 + $n2;
    $n1 = $n2;
    $n2 = $contador;
    echo $contador . "<br>";
}
echo "<br><br>";
?>

 <?php

    $n1 = 0;
    $n2 = 1;
    $total = 0;

    for ($i = 0; $i < 5; $i++) {

        $suma = $n1 + $n2;
        $total += $suma;
        $n1 = $n2;
        $n2 = $suma;

        echo $suma . "</br>";
        $aux[$i] = $suma;
    }
    echo "Total: " . $total;

    ?>
