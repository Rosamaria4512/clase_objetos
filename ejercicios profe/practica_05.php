<?php
print "elija el medio de pago, para la tarjeta de credito digite A, para bono o cupon dijite B y para pagar de contado digite C";
$pago = "B";
$a = "tarjeta de credito";
$b = "bono o cupon";
$c = "de contado";
if ($pago == 0) {
  echo "ERROR ESTE VALOR NO ES VALIDO";
  echo "<br />";
} elseif ($pago == "A") {
  echo " el pago sera realizado con:  " . $c;
}
echo "<br />";
echo "<br />";
if ($pago == "B") {
  echo " el pago sera realizado con:  " . $b;
}
echo "<br />";
echo "<br />";
if ($pago == "C") {
  echo " el pago sera realizado con:  " . $b;
}
echo "<br />";
