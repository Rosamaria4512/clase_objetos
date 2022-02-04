<?php

    print("PORSENTAJE DE HOMBRES Y DE MUJERES EN UN GRUPO DE ESTUDIANTES")."<P>";
    $mujeres = $_REQUEST["mujeres"];
    $hombres = $_REQUEST["hombres"];
    
    $total_estudiantes = $mujeres + $hombres;
        
    $porsentaje_mujeres = ($mujeres * 100 ) / $total_estudiantes;
    $porsentaje_hombres = ($hombres * 100 ) / $total_estudiantes;
   
    
    echo " Para un total de  ".$total_estudiantes."    estudiantes el porsentaje de mujeres y de hombres es :"."<p>";
    echo " MUJERES: ".number_format($porsentaje_mujeres,2)."%"."<p>";
    echo " HOMBRES: ".number_format($porsentaje_hombres,2)."%"."<p>";
    print("<P>");
    
    print("<P>");
    print("<P>");
    
    print("<P>");
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/04_FORMULARIO_EJERCICIO_04.PHP"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

?>