<?php

    print("CALCULO DEL SUELDO TOTAL DEL EMPLEADO MAS LAS COMISIONES POR VENTAS")."<P>";
    $sueldo_base = $_REQUEST["sueldo_base"];
    
    $comision_venta1 = $sueldo_base * 0.10;
    $comision_venta2 = $sueldo_base * 0.10;
    $comision_venta3 = $sueldo_base * 0.10;
    
    $total_sueldo = $sueldo_base + ($comision_venta1 + $comision_venta2 + $comision_venta3 );
        
   
    
    
    echo " COMISION VENTA 1: "."$".$comision_venta1."<p>";
    echo " COMISION VENTA 2: "."$".$comision_venta2."<p>";
    echo " COMISION VENTA 3: "."$".$comision_venta3."<p>";
    
    print("<P>");
    
    print("<P>");
    print("<P>");
    echo " EL SUELDO TOTAL MAS LAS COMISIONES ES : "."$".$total_sueldo."<p>";

    print("<P>");
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/05_FORMULARIO_EJERCICIO_05.PHP"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

?>