<?php

 if (isset($_POST["btn_enviar"])){

        $nombres= $_POST["nombres"];
        $salario= $_POST["salario"];
        $meses_l=$_POST["meses_l"];

        if ($meses_l<12) {
            $meses = ($salario*0.05);

            echo "</h2>"."Su asignacion es " . $meses. "</h2>";
    
        }elseif ($meses_l>12 and $meses_l<24) {
            $meses = ($salario*0.07);

            echo "</h2>"."Su agsinación es " . $meses. "</h2>";
        
        }elseif ($meses_l>24 and $meses_l<60){
            $meses = ($salario*0.1);

            echo "</h2>"."Su agsinación es " . $meses. "</h2>";

        }elseif ($meses_l>60 and $meses_l<120){
            $meses = ($salario*0.15);
            echo "</h2>"."Su agsinación es " . $meses. "</h2>";
            
        }
        
        elseif ($meses_l >= 120) {
            $meses = ($salario*0.2);

            echo "</h2>"."Su agsinación es " . $meses. "</h2>";
        }
    }
?>