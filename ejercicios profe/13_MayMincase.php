<?php 

    /* Digitar los nombres completos en un input
        en un segundo input solicitar un numero
        si es 1 convertir los nombres  a mayuscula
        si es 2 convertir los nombres  a minuscula
        si es 3 convertir los nombres  a Tipo 0ración
        */

        if (isset($_POST["btn_enviar"])) {
            $nombres = $_POST["nombres"];
            $numero = $_POST["numero"];

            #procedimiento
            switch ($numero) {
                case 1:
                    echo strtoupper($nombres);
                    break;
                
                default:
                    # code...
                    break;
            }
        }

?>