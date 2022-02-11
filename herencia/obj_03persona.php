<?php

require_once("03_persona.php");

$objpersona = new persona("Milton",23, "1061785948",);
$objpersona->getpersona();

print_r('<pre>');
print_r($objpersona);
print_r('</pre>');