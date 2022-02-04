<?php



$num1= 0;
$num2= 1;
$num3;


echo $num1 . "<p>" . $num2 . "<p>";

for ($i=0; $i <=10 ; $i++) { 
    $num3 = $num1+$num2;
    $num1= $num2;
    $num2=$num3;

    echo $num3 . "<p>";


}

?>