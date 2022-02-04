<?php
if(isset($_REQUEST["btn_enviar"])){
    $year= $_REQUEST["año"];

    if ($year%4==0 and ($year%100!=0 or $year%400==0)){
        echo"El año $year es bisiesto";
    }else {
        echo"el año $year no es bisiesto";
    }
}
function esBisiesto($year=NULL) {
    $year = ($year==NULL)? date('año'):$year;
    return ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 );
}

?>