
<?php
echo" VAlOR VENTAS DE UNA VENDEDOR";
echo"<p>";
$nombre=$_REQUEST["nombre"];
$cargo=$_REQUEST["cargo"];
$ventas=$_REQUEST["valor_v"];
if ($ventas<100000) {
    $comision=$ventas*0.02;  
    echo"Nombre: <br> $nombre <p>";
    echo"Cargo: <br> $cargo <p>";
    echo"comision: <br> $comision <p>";
    $total= $comision + $ventas;
    echo "Total: $total ";
}elseif ($ventas>=100000 and $ventas<200000) {
    $comision=$ventas*0.04;  
    echo"Nombre: <br> $nombre <p>";
    echo"Cargo: <br> $cargo <p>";
    echo"comision: <br> $comision <p>";
    $total= $comision + $ventas;
    echo "Total: $total ";
}elseif ($ventas>=200000 and $ventas<400000) {
    $comision=$ventas*0.06;  
    echo"Nombre: <br> $nombre <p>";
    echo"Cargo: <br> $cargo <p>";
    echo"comision: <br> $comision <p>";
    $total= $comision + $ventas;
    echo "Total: $total ";
}elseif ($ventas>=400000 and $ventas<600000) {
    $comision=$ventas*0.08;  
    echo"Nombre: <br> $nombre <p>";
    echo"Cargo: <br> $cargo <p>";
    echo"comision: <br> $comision <p>";
    $total= $comision + $ventas;
    echo "Total: $total ";
}elseif ($ventas>=600000 and $ventas<1000000) {
    $comision=$ventas*0.10;  
    echo"Nombre: <br> $nombre <p>";
    echo"Cargo: <br> $cargo <p>";
    echo"comision: <br> $comision <p>";
    $total= $comision + $ventas;
    echo "Total: $total ";
}elseif ($ventas>=1000000) {
    $comision=$ventas*0.20;  
    echo"Nombre: <br> $nombre <p>";
    echo"Cargo: <br> $cargo <p>";
    echo"comision: <br> $comision <p>";
    $total= $comision + $ventas;
    echo "Total: $total ";
}
?>