<?php

require_once("01_pproducto.php");
require_once("02_mueble.php");
require_once ("03_mesa.php");

$objProducto = new Producto("Base cama de 1.40", 3530000, "disponible");
$objProducto->getProducto();

echo"<h2>DATOS DEL PRODUCTO</h2>";
print_r('<pre>');
print_r($objProducto);
print_r('</pre>'). "<br>";
echo producto::$Status . "<br>";
echo "El precio del computador portatil es:" . $objProducto-> getPrecio() . "<br>";
echo "su cambio de precio fue exitoso: "  .$objProducto-> setPrecio(4500000);
echo $objProducto-> getPrecio();

echo"<h2>DATOS DEL MUEBLE</h2>";
$objmueble = new Mueble ("Base cama de 1.40", 3530000, "disponible", "negro","madera fina");
print_r('<pre>');
print_r($objmueble);
print_r('</pre>'). "<br>";

echo"<h2>DATOS DE LA MESA</h2>";
$objMesa = new Mesa ("Base cama de 1.40", 3530000, "disponible", "negro","madera fina","cuadrada","grande");
print_r('<pre>');
print_r($objMesa);
print_r('</pre>'). "<br>";
