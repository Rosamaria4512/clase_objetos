<HTML:5><H1>LA COMISION POR LA VENTA ES:</H1></HTML:5>

<?php

print ("") . "<P>";
$nombre = $_REQUEST["nombre"];
$cargo = $_REQUEST["cargo"];
$valor = $_REQUEST["valor"];
echo "<br />";
echo "<br />";
echo "NOMBRE: ".$nombre;
echo "<br />";
echo "<br />";
echo "<br />";
echo "CARGO: ".$cargo;
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "EL VALOR DE LA VENTA ES: ".$valor;
echo "<br />";
echo "<br />";
echo "<br />";

if ($valor < 100000) {
  $a =  $valor * 0.02;
  echo "la comision por la venta es:    " . $a;

  echo "<br />";
}

if ($valor >= 100000 and $valor < 200000) {
  $a =  $valor * 0.04;
  echo "la comision por la venta es:    " . $a;

  echo "<br />";
}

echo "<br />";
echo "<br />";
echo "<br />";



print("<P>");
print("<P>");
echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/06_FORMULARIO_EJERCICIO%20_06%20copy.PHP"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
print("<P>");
echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';
