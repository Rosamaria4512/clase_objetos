Realizar un script el cual reciba de un formulario la cantidad de números que
se desea mostrar y en seguida visualice los números desde 1 hasta la cantidad digitada
por el usuario.

<?php
echo"<p>";
$a = $_REQUEST["num"];
$i = 1;
while ($i <= $a):
    echo "$i <br>";
    $i++;
endwhile;

?>