<?php
//algoritmo para calcular una altura en pulgadas y pies

if (isset($_REQUEST["btn_enviar"])) {

    $altura = $_POST["altura"];
    $unidad = $_POST["unidad"];

    if ($unidad ==1) {
        echo "La medida en cm es: ". number_format($respuesta_cm = $altura*100) ." centimetros<br>";
    }elseif ($unidad ==2) {
        echo $respuesta_m = $altura/1000;
    }elseif ($unidad ==3) {
        echo $respuesta_pulgada = $altura * 39.37 . "<br>";
        echo $respuesta_pulgada = $altura/0.0254;
    }else {
        echo $respuesta_pies = $altura*3.281;
    }

}


/* if (isset($_REQUEST["btn_enviar"])) {
    if (empty($_REQUEST["altura"])) {
        echo "Digite un valor para altura";
    } else {
        $altura = $_POST["altura"];
        $pulgada = 2.54;

        $resultadop = $altura / $pulgada;
        echo "el resultado de la altura en pulgadas es: " . round($resultadop) . "<br>";

        $resultadopies = $resultadop / 12;
        echo "el resultado de la altura en pies es: " . number_format($resultadopies, 2). "<br>";
    }
    echo '<a href="http://localhost/Adsi_2338368/17_formpiespulgadas.php"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
}
 */