<?php
$vrCantidad=$_REQUEST["cant"];
$vrImagen=$_REQUEST["imagen"];
if ($vrImagen=="tigre") {
    $imagen="tigre.jfif";
    $animal="Tigre";
}elseif ($vrImagen=="leon") {
    $imagen="leon.jfif";
    $animal="Leon";
}elseif ($vrImagen=="elefante") {
    $imagen="elefante.jfif";
    $animal="elefante";
}elseif ($vrImagen=="pantera") {
    $imagen="pantera.jfif";
    $animal="pantera";
}elseif ($vrImagen=="mariposa") {
    $imagen="mariposa.jfif";
    $animal="mariposa";
}else{
    $imagen="conejo.jfif";
    $animal="conejo";
}
echo"<hr>";
echo"Animal: $animal<br />";
echo"<hr>";
$c=1;
do {
    echo"<img src = '$imagen'>";
    $c= $c + 1;
} while ($c <= $vrCantidad);
echo"<hr>";

?>