<?php
if(isset($_REQUEST["btn_enviar"])){
    $tabla=$_REQUEST["tabla"];
    $num=$_REQUEST["num"];
    echo"<h2> Tabla de multiplicar:  $tabla </h2>";
    echo"<h3>ciclo for </h3><br>";
    for ($i=1; $i <=$num; $i++) { 
        $valor=$i*$tabla;
        echo "<td> $tabla*$i=$valor <br>";
    }
    echo"<h3>ciclo while </h3><br>";
    $i=1;
    while ($i <=$num) { 
        $valor= $tabla*$i;
        echo "<td> $tabla x $i=$valor <br>";
        $i++;
    }
    echo"<h3>ciclo do while </h3><br>";
    $i=1;
    do {
        $valor= $tabla*$i;
        echo "<td> $tabla * $i=$valor <br>";
        $i++;
    } while ($i <= $num);
}
?>