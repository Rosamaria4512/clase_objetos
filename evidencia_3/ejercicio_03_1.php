<?php

 if (isset($_POST["btn_enviar"])){

        $nombres= $_POST["nombres"];
        $salario= $_POST["salario"];
        $anios_l=$_POST["anios_l"];
        $meses_l=$_POST["meses_l"];

        if ($meses_l<1) {
            $meses = ($salario*0.05);

            echo "</h2>"."Su asignacion es " . $meses. "</h2>";
    
        }elseif ($meses_l>12 and $anios_l<2) {
            $meses = ($salario*0.07);

            echo "</h2>"."Su agsinación es " . $meses. "</h2>";
        
        }elseif ($meses_l>24 and $meses_l<60){
            $meses = ($salario*0.1);

            echo "</h2>"."Su agsinación es " . $meses. "</h2>";

        }elseif ($meses_l>60 and $meses_l<120){
            $meses = ($salario*0.15);
            echo "</h2>"."Su agsinación es " . $meses. "</h2>";
            
        }
        
        elseif ($anios_l >= 10) {
            $anios = ($salario*0.20);

            echo "</h2>"."Su agsinación es " . $anios. "</h2>";
        }
    }
?>