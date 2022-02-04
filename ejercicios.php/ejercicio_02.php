<?php  

    if (isset($_POST["btn_enviar"])) {
        
        $nombres = $_POST["nombres"];
        $horas_trabajadas = $_POST["horas_trabajadas"];
        $valor_hora = $_POST["valor_hora"];
        $horas_extras = $horas_trabajadas-140;
        $horas_triples = $horas_extras-8;
        $valor_dobles = ($valor_hora*2)*8;

        if ($horas_extras<=8) {
            $doble = ($valor_hora*2)*$horas_extras;

            echo "</h2>"."El pago de las horas extras ".$doble. "</h2>";

            
        }elseif ($horas_extras >8) {
            $triples = ($valor_hora*3)*$horas_triples;
            $total=$triples + $valor_dobles;

              echo "<h2>"."El pago de las horas extras ".$total."</h2>";


        
        }
        


    }

?>