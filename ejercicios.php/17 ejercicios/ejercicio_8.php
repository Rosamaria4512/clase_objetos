<?php
if(isset($_REQUEST["btn_enviar"])){
    $n=$_REQUEST["numero"];
    if ($n>1) {
            if (getPrimo($n)){ 
                echo "El numero ingresado ". $n ." es: PRIMO". "<br/>";
            }else{
                echo "El numero ingresado ". $n . " es: COMPUESTO". "<br/>";            

                
            }    
        
    }
}    /*funcion que debuelve si el numero es primo*/

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