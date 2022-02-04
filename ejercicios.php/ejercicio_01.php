<?php  

    if (isset($_POST["btn_enviar"])) {
        
        $nombres = $_POST["nombres"];
        $cargo = $_POST["cargo"];
        $valor_ventas = $_POST["valor_ventas"];
        

        if ($valor_ventas < 100000) {
            $comision1 = $valor_ventas*0.02;
            echo "</h2>"."El vendedor ".$nombres." tiene una comision de:  $ ". $comision1 . "</h2>";
        
        }elseif ($valor_ventas >= 100000 AND $valor_ventas < 200000) {
            $comision2 = $valor_ventas*0.04; 
            echo "</h2>"."El vendedor ".$nombres." tiene una comision de: ". $comision2 . "</h2>";
        
        }elseif ($valor_ventas >= 200000 AND $valor_ventas < 400000) {
            $comision3 = $valor_ventas*0.06; 
            echo "</h2>"."El vendedor ".$nombres." tiene una comision de:  $ ". $comision3 . "</h2>";
        
        }elseif ($valor_ventas >= 400000 AND $valor_ventas < 600000) {
            $comision4 = $valor_ventas*0.08; 
            echo "</h2>"."El vendedor ".$nombres." tiene una comision de:  $ ". $comision4 . "</h2>";
        
        }elseif ($valor_ventas >= 600000 AND $valor_ventas < 1000000) {
            $comision5 = $valor_ventas*0.010; 
            echo "</h2>"."El vendedor ".$nombres." tiene una comision de:  $ ". $comision5 . "</h2>";
        
        }elseif ($valor_ventas >= 100000) {
            $comision6 = $valor_ventas*0.20; 
            echo "</h2>"."El vendedor ".$nombres." tiene una comision de:  $ ". $comision6 . "</h2>";
        
        }
        


    }

?>