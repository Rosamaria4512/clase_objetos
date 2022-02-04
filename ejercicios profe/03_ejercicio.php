<?php

    print("PUNTAJE OPTENIDO POR UN EQUIPO EN LA COPA COLOMBIA")."<P>";
    $partidos_ganados = $_REQUEST["ganados"];
    $partidos_empatados = $_REQUEST["empatados"];
    $partidos_perdidos = $_REQUEST["perdidos"];
    $Pganados = $partidos_ganados * 3;
    $Pempatados = $partidos_empatados * 1;
    $Pperdidos = $partidos_perdidos * 1;
    $promedio = ($Pganados + $Pempatados) - $Pperdidos;
    
    echo " CANTIDAD DE PARTIDOS GANADOS: ".$partidos_ganados."<p>";
    echo " CANTIDAD DE PARTIDOS EMPATADOS: ".$partidos_empatados."<p>";
    echo " CANTIDAD DE PARTIDOS PERDIDOS: ".$partidos_perdidos."<p>";
    print("<P>");
    
    echo " EL PUNTAJE TOTAL DE UN EQUIPO EN LA COPA COLOMBIA 2021 ES : ".$promedio."<p>";
    print("<P>");
    print("<P>");
    
    print("<P>");
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/03_FORMULARIO_EJERCICIO%20_03.PHP"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

?>