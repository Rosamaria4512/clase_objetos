<?php
# serie fibonacci con FOR
$fibo1 = 1;
$fibo2 = 1;
$fibo;
$x;

 echo "<br>" , $fibo1 , "<br>" , $fibo2;

 for ($x=1; $x<=10; $x++) { 

    $fibo=$fibo1+$fibo2;

    echo "<br>" , $fibo; $fibo1 = $fibo2; $fibo2 = $fibo;
    
 }
    

 
?>



