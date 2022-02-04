1. Script el cual imprima los números del 1 al 10.
<br><br>
Solucion:
<?php
echo"<p>";

for ($i=1; $i <=10 ; $i++) { 
    echo$i;
}
?>

<p>
2. Realizar un script el cual imprima la tabla de multiplicar del 5 desde 1 hasta 10.
<p>
Solucion:
<br><br>
<?php

$tabla= 5;
for ($i=1; $i <=10; $i++) { 
    $valor=$i*$tabla;
    echo "<td> $tabla*$i=$valor <br>";
    
}
?>