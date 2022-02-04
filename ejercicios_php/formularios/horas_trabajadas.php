<?php

    $nombre = $_REQUEST["nombre"];
    $horas_trabajadas =$_REQUEST["horas_trabajadas"];
    $valor_hora = $_REQUEST["valor_hora"];
    $horas_extras = $horas_trabajadas - 120;

    if (isset($_POST["btn_enviar"])) { 
        

    if ($horas_trabajadas <=120) {
        $total=($valor_hora * $horas_trabajadas);
        echo "señor(a) ". $nombre . " su salario total sera de:".$total;
        }
    elseif ($horas_trabajadas >120 and $horas_trabajadas <= 136) {
        $total = (($horas_trabajadas*120)+($horas_extras*($horas_trabajadas*2)));
         echo "señor(a) ". $nombre . " su salario total sera de:".$total;
        }
        elseif ($horas_trabajadas>136) {
            $horast = ($horas_trabajadas -136);
            $total = (($horas_trabajadas *120)+(16 *($horas_trabajadas*2))+($horast *($horas_trabajadas *3)));
            echo "señor(a) ". $nombre . " su salario total sera de:".$total;
        }

}

?>