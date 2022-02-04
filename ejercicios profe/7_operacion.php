<?php 
    $vrnumero1 = $_REQUEST["num_numero1"];
    $vrnumero2 = $_GET["num_numero2"];

    $vrrespuesta = $vrnumero1 + $vrnumero2;
    
    echo "La suma de los numeros: ".$vrnumero1." y ". $vrnumero2. "es: ".$vrrespuesta."<br>";

    echo  '<a href="http://localhost/adsi_2338368/06_formulario.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'

?>