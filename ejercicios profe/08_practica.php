<?php  
print"calcular salario de un trabajador <br>";
$vrnombre = $_REQUEST["text_nombres"];
$vrcargo = $_REQUEST["text_cargo"];
$vrsalario = $_REQUEST["num_salario"];
$vrboni = $_REQUEST["num_boni"];
echo "Nombre: ".$vrnombre."<br>";
echo "Cargo: ".$vrcargo. "<br>";
echo "Salario: ".$vrsalario. "<br>";
$bonif = $vrboni / 100;
$aumento = $vrsalario * $bonif + $vrsalario;
echo "Salario total: ".$aumento."<br>";
echo "<br><br>";
echo '<a href="http://localhost/Adsi_2338368/08_formulario.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'

?>