<?php
#proveedor
if (isset($_POST["btn_enviar"])) {

$valor_producto = $_REQUEST ["valor_producto"];
$marca = $_REQUEST ["marca"];
$n_articulos = $_REQUEST ["n_articulos"];

if ($marca=="sanyo"){
$descuento = ($valor_producto * 0.05)-$valor_producto;

echo "su descuento es: $descuento";
}

?>