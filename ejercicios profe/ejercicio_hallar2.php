<?php

$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$numero3 = $_REQUEST["numero3"];


#procedimiento

if ($numero1 > $numero2 and $numero1 > $numero3) { 
    $numeromayor = $numero1;
}elseif ($numero2 > $numero3)  {
        $numeromayor = $numero2;
    } 
        $numeromayor = $numero3;
    
        echo "<h2>el numero mayor es :" . $numeromayor. "</h2>";




?>