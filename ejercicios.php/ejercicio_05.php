<?php
echo"<p>";
    $vrnum_u = $_REQUEST["num"];
    $vrvalor_u = $_REQUEST["valor"];
    $vrforma_p = $_REQUEST["forma_p"];
    $vrtiempo = $_REQUEST["t_meses"];
    $vrtotal = $vrvalor_u*$vrnum_u;
    
    if ($vrforma_p=="credito") {  
        if ($vrtiempo=="2") {
            $incremento=$vrtotal*0.05;
            $pago_t=$vrtotal + $incremento;
            echo"valor total de la compra: $vrtotal <br>";
            echo"valor del incremento: $incremento <br>";
            echo"valor total a pagar por los 3 meses forma credito: $pago_t <br>";
        }elseif ($vrtiempo=="3") {
            $incremento=$vrtotal*0.10;
            $pago_t=$vrtotal + $incremento;
            echo"valor total de la compra: $vrtotal <br>";
            echo"valor del incremento: $incremento <br>";
            echo"valor total a pagar por los 6 meses forma credito: $pago_t <br>";
        }elseif ($vrtiempo=="4") {
            $incremento=$vrtotal*0.15;
            $pago_t=$vrtotal + $incremento;
            echo"valor total de la compra: $vrtotal <br>";
            echo"valor del incremento: $incremento <br>";
            echo"valor total a pagar por los 9 meses forma credito: $pago_t <br>";
        }elseif ($vrtiempo=="6") {
            $incremento=$vrtotal*0.20;
            $pago_t=$vrtotal + $incremento;
            echo"valor total de la compra: $vrtotal <br>";
            echo"valor del incremento: $incremento <br>";
            echo"valor total a pagar por los 12 meses forma credito: $pago_t <br>";
        }else {
            $incremento=$vrtotal*0.30;
            $pago_t=$vrtotal + $incremento;
            echo"valor total de la compra: $vrtotal <br>";
            echo"valor del incremento: $incremento <br>";
            echo"valor total a pagar por mas de 12 meses forma credito: $pago_t <br>";
        }
    }elseif ($vrforma_p=="contado") {
        $descuento=$vrtotal*0.10;
        $pago_t= $vrtotal - $descuento;
        echo"valor total de la compra: $vrtotal <br>";
        echo"valor del descuento: $descuento <br>";
        echo"valor total a pagar de forma contado: $pago_t <br>";
    }
    
?>