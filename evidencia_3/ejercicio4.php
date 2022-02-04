<?php
$vrCantidad=$_REQUEST["cant"];
$vrImagen=$_REQUEST["imagen"];
if ($vrImagen=="tigre") {
    $imagen="../img/tigre.jpg";
    $animal="Trigre";
}elseif ($vrImagen=="leon") {
    $imagen="../img/leon.jpg";
    $animal="Le&oacute;n";
}elseif ($vrImagen=="elefante") {
    $imagen="../img/leon.jpg";
    $animal="elefante";
}elseif ($vrImagen=="pantera") {
    $imagen="../img/leon.jpg";
    $animal="pantera";
}elseif ($vrImagen=="mariposa") {
    $imagen="../mariposa.jpg";
    $animal="mariposa";
}else{
    $imagen="../img/conejo.jpg";
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