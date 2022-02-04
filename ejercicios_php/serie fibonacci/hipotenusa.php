<?php 

echo "hallar la hipotenusade un triangulo rectangulo dados los catetos";

$a = 12;
$b = 8;

    function hipotenusa( $cateto1, $cateto2){
     $hipotenusa=$cateto1*$cateto1+pow($cateto2,2);
     return $hipotenusa;

   

}
echo hipotenusa($a,$b);
 

?>