<?php 

    if (isset($_POST["btn_enviar"])) {
        $marca = $_POST["marca"];
        $valor_uni = $_POST["valor_uni"];
        $numero_art = $_POST["numero_art"];
        $descuento = 0;
     $descto = 0; 
       $descto2 = 0;
       if ($valor_uni>= 1120000){
           if ($numero_art <= 5){
                  $descto = ($valor_uni*$numero_art)*0.07;
                   if($marca== "Sanyo"){
                    $descto2 = ($valor_uni * $numero_art) * 0.05;
                   }
            }
        }
        echo $valor_total = (($valor_uni*$numero_art)-$descto)-$descto2;

    if ($marca == "Sanyo" and $valor_uni <= 1120000 and $numero_art <= 5) {
        $descuento = ($valor_uni * $numero_art) * 0.12;
        //$descuento2 = (($valor_uni*$numero_art)*0.05);
        echo $valor_t = $valor_uni * $numero_art - $descuento;
    } elseif ($marca != "Sanyo") {
    
    }

    }
    
    




?>