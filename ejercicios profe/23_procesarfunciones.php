<?php 

    if (isset($_REQUEST["btn_enviar"])) {
        $vrnumero1 = $_POST["numero1"];
        $vrnumero2 = $_POST["numero2"];
        $vroperacion = $_POST["operacion_aritmetica"];

        //declarando la funcion (operaciones o el algoritmo capsula)
        //funcion puede tener parametros  o no
        function operaciones_aritmeticas($vrnum1, $vrnum2,$vropera){
            if ($vropera==1) {
                $respuesta = $vrnum1 + $vrnum2;
                
            }elseif ($vropera==2) {
                $respuesta = $vrnum1 - $vrnum2;

            }   
            return $respuesta;
        }
        //Para uso de la funcion para llamarla por el nombre
        echo operaciones_aritmeticas($vrnumero1, $vrnumero2, $vroperacion);
    }

?>