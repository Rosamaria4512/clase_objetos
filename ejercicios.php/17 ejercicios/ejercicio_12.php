<?php
echo"<h2> Serie Fibonacci </h2>";
$num=$_REQUEST["num"];
$n=0;
$a=1;
echo"Numero limite de la serie: $num <p>";
echo"serie:";
for ($i=1; $i <=$num ; $i++) {
    $aux=$a+$n;
    $a=$n;
    $n=$aux;
    echo"$aux-";
}
echo "<p> Enésimo termino de la serie: ".+$n;
?>