<?php 
    $var_anio = 2000;
    $var_resul = 2021 - $var_anio;

    if ($var_anio == 0) {
        echo "Año no valido: ".$var_anio;
    }elseif ($var_resul >= 18) {
        echo "Es mayor de edad, su edad es: ". $var_resul;
    }else{
        echo "Es menor de edad, su edad es: " . $var_resul;
    }

?>