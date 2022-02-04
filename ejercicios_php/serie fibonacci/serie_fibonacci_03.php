<?php
#serie fibonacci en while
$fibo1 = 1;
$fibo2 = 1;
$fibo;
$x=0;

echo "<br>" , $fibo1 , "<br>" , $fibo2;

while ($x<=20) {
    $fibo=$fibo1+$fibo2;

    echo "<br>" , $fibo; $fibo1 = $fibo2; $fibo2 = $fibo; $x++;
    
 }
    echo "<br><br>"

 
?>
