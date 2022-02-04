<?php

$num= $_REQUEST["num"];

if ($num <= 1000) {
    $a=0;
    $suma=0;
    
    echo "<br>" . "su numero digitado: $num <br>";
    
    for ($a=0; $a <= $num ; $a++) { 

        echo $a;
        $suma =$a+$suma;
        
    }
    echo "<P> la suma de la serie es $suma";
}
    








?>









