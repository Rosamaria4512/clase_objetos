<?php

if(isset($_REQUEST["btn_enviar"])){
    $n=$_REQUEST["numero"];

    for ($i=$n; $i <= $n; $i++) {
        if (getPrimo($i)){ 
            echo "El numero ingresado: ". $i ."  ES PRIMO". "<br/>";
        }else{
            echo "El numero ingresado: ". $i . "  NO ES PRIMO". "<br/>";            

            
        }    
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