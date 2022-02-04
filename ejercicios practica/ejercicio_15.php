<?php
$vrCantidad=$_REQUEST["cant"];
$vrImagen=$_REQUEST["imagen"];
if ($vrImagen=="naranja") {
    $imagen="../img/naranja.png";
    $fruta="naranja";
}elseif ($vrImagen=="uvas") {
    $imagen="../img/uvas.png";
    $fruta="uvas";
}elseif ($vrImagen=="sandia") {
    $imagen="../img/sandia.png";
    $fruta="sandia";
}elseif ($vrImagen=="manzana") {
    $imagen="../img/manzana.jpg";
    $fruta="manzana";
}
echo"<hr>";
echo"Frutas: $fruta <br />";
echo"<hr>";
$c=1;
do {
    echo"<img src = '$imagen'>";
    $c= $c + 1;
} while ($c <= $vrCantidad);
echo"<hr>";

?>