<?php

    print("OPERACIONES ARITMETICAS ")."<P>";
    $vrnumero1 = $_REQUEST["numero1"];
    $vrnumero2 = $_REQUEST["numero2"];

    $vrrespuesta = $vrnumero1 + $vrnumero2;
    echo " la suma de los numeros: ".$vrnumero1 + $vrnumero2;"es:  ".$vrrespuesta."<p>";
    print("<P>");
    $vrrespuesta = $vrnumero1 - $vrnumero2;
    echo " la resta de los numeros: ".$vrnumero1 - $vrnumero2;"es:  ".$vrrespuesta."<p>";
    print("<P>");
    $vrrespuesta = $vrnumero1 * $vrnumero2;
    echo " la multiplicacion de los numeros: ".$vrnumero1 * $vrnumero2;"es:  ".$vrrespuesta."<p>";
    print("<P>");
    $vrrespuesta = $vrnumero1 / $vrnumero2;
    echo " la division de los numeros: ".$vrnumero1 / $vrnumero2;"es:  ".$vrrespuesta."<p>";
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/06_ejercicio.php"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
    
    











?>