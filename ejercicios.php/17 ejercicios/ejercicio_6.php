<?php
echo"<h2> Numeros primos entre 2 y 1000 </h2>";
$n=2;
$f=1000;
for ($i=$n; $i <= $f; $i++) {
    if (getPrimo($i)){ 
        echo  $i ."<br/>";
    }     
}    /*funcion que debuelve si el numero es primo
    */

    function getPrimo($numero)
    {
        $contador = 0;
        for ($i=1; $i <= $numero ; $i++) {
            if ($numero%$i==0) {
                $contador = $contador + 1;
            }

        }
        
        if ($contador==2){
            return true;
        }else{
            return false;
        }   
    }
?>