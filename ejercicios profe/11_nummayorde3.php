<?php 
    #hallar el numero mayor de 3 numeros digitados

    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];
    $numero3 = $_REQUEST["numero3"];

    #procedimiento

    if ($numero1 > $numero2 AND $numero1 > $numero3) {
        $numeromay = $numero1;
    }elseif ($numero2 > $numero3) {
            $numeromay = $numero2;
        } else{
            $numeromay = $numero3;
        }
    echo "<h2>el numero mayor es:" . $numeromay. "</h2>";
    
?>