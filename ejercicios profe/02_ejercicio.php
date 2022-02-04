<?php

    print("TIEMPOS RECORRIDOS EN LA SEMANA")."<P>";
    $lunes = $_REQUEST["lunes"];
    $martes = $_REQUEST["martes"];
    $miercoles = $_REQUEST["miercoles"];

    $promedio = ($lunes + $martes + $miercoles) / 3;
    
    echo " LUNES: ".$lunes."<p>";
    echo " MARTES: ".$martes."<p>";
    echo " MIERCOLES: ".$miercoles."<p>";
    print("<P>");
    
    echo " EL PROMEDIO DEL TIEMPO RECORRIDO EN LA SEMANA ES : ".$promedio."<p>";
    print("<P>");
    print("<P>");
    
   
    print("<P>");
    echo '<a href="http://localhost/ADSI EINER/02_FORMULARIO_EJERCICIO_02.PHP"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
    print("<P>");
    echo '<a href="http://localhost/ADSI EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';
?>