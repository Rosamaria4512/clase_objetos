<?php
#serie fibonacci en  do while
$fibo1 = 1;
$fibo2 = 1;
$fibo;
$x=0;

echo "<br>" , $fibo1 , "<br>" , $fibo2;

do{
    $fibo=$fibo1+$fibo2;

    echo "<br>" , $fibo; $fibo1 = $fibo2; $fibo2 = $fibo; $x++;
    
 } while ($x<5)

?>