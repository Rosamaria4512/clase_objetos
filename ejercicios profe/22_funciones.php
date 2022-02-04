<?php 
    echo"Programa para calcular la suma de un numero"."<br>";
    $a = 2;
    //construccion de la funcion 
    function opsuma($numero1, $numero2){
        $resultado = $numero1+$numero2;
        return $resultado;
    }
    //Llamado a la función opsuma
    echo "La suma es: ".opsuma(500,1000);
    echo "<br>";
    echo "La suma es: " . opsuma(100, 1200);
    echo "<br>";

?>

<?php 
    function saludoAdsi($texto){
        $resultado = Strtoupper($texto);
        return $resultado;
    }

    echo "<br>";
    echo saludoAdsi("Hola mundo")."<br>";
    echo saludoAdsi("Hola mundo")."<br>";
    echo saludoAdsi("Hola mundo")."<br>";
    echo saludoAdsi("Hola mundo")."<br>";
    echo saludoAdsi("Hola mundo")."<br>";

?>