<?php

    $tabla=3;
    $tabla1=5;
    $tabla2=7;
    $n=100;
    $fin=300;
    echo"<h3>ciclo for </h3><br>";
    for ($i=$n; $i <=$fin; $i+=3) { 
        
        echo "<td> $i <br>";
    }
    echo"<h3>ciclo while </h3><br>";
    $e=100;
    while ($e <=300) { 
        
        echo "<td> =$e <br>";
        $e+=5;
    }
    echo"<h3>ciclo do while </h3><br>";
    $a=100;
    do {
        
        echo "<td> $a<br>";
        $a+=7;
    } while ($a <= 300);
    $suma=$a+$e+$i;
    echo$suma;
?>