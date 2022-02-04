<?php


echo "<b>hola<b><p>"; 

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    

    if ($num1 > $num2 and $num1 > $num3) {
        echo "el numero mayor es :" .$num1;
    }

    if ($num2 >$num1 and $num2 > $num3) {
        echo "el numero mayor es :" .$num2;
    }

    if ($num3 >$num1 and $num3 > $num2) {
        echo "el numero mayor es :" .$num3;
    }
    

        
    



?>
