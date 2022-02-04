<?php

if (isset($_POST["btn_enviar"])){

    $num_unidades = $_POST["num_unidades"];
    $valor_unidad = $_POST["valor_unidad"];
    $forma_pago = $_POST["forma_pago"];
    $meses = $_POST["meses"];
    $total = $valor_unidad * $num_unidades;

    if ($forma_pago=="contado") {
        $descuento = $total*0.10;
        $vrtotal = $total-$descuento;

        echo "</h2>"."El valor total a pagar con el descunto es : " .$vrtotal." pesos </h2";
    
    }if ($forma_pago== "credito" and $meses== "3" ){
        $incremento = $total * 0.10;
        $vrtotal= $total+$incremento;

        echo "</h2>"."El valor total a pagar con su incremento es : " .$vrtotal. "</h2";
    }
}


?>


#echo"<p>";
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
        }elseif ($vrtiempo=="5") {
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
   
?>