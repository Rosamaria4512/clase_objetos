<?php
    #llamdo de archivo de la clase  para hacer eso neceiso el motodo llamado requiere_once
    require_once ("calculadora_01.php");

    #crear el objeto o instanciar
    echo "<p>"."Suma de 21450 + 34562 ="."<br>";
    $operacion = new calculadora(21450, 34562);
    echo $operacion ->suma();
    echo"<br>"; 

    echo "<p>"."Resta de 21450 + 34562 = "."<br>";
    $operacion = new calculadora(21450, 34562);
    echo $operacion->resta();
    echo"<br>"; 

    echo "<p>"."Multiplicacion de 21450 + 34562 ="."<br>";
    $operacion = new calculadora(21450, 34562);
    echo $operacion->multiplicacion();
    echo"<br>"; 


    echo "<p>"."Division de 21450 + 34562 = "."<br>";
    $operacion = new calculadora(21450, 34562);
    echo $operacion->division();
    echo"<br>"; 





?>