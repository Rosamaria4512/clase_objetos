<?php
echo"<br>";
echo"<br>";
echo"SICLO WHILE";
echo"<br>";
echo"<br>";
echo"SICLO WHILE EJERCICIO 1";
echo"<br>";
echo"<br>";
$i=-0;
while ($i<5){
$i=$i+1;
print("<P>");
echo $i;

}



?>
<?php
echo"<br>";
echo"<br>";
echo"SICLO WHILE EJERCICIO 2 (con la variable contador)";
echo"<br>";
echo"<br>";
$i=0;
$contador = 0;
while ($i<10){
$i++;
$contador = $contador + $i;
echo $i."<br>";
}
echo $contador;
print("<P>");


?>
<?php
echo"<br>";
echo"<br>";
echo"SICLO FOR";
echo"<br>";
echo"<br>";
   for($i=0; $i<=10;$i++){
    echo$i."<br>";
   }




?>

<?php
echo"<br>";
echo"<br>";
echo"SICLO DO WHILE";
echo"<br>";
echo"<br>";
$i = 0;
do {
    $i= $i+1;
    
    echo$i."<br>";
} while ($i <= 9);



print("<P>");
print("<P>");
echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/01_FORMULARIO_EJERCICIO_01.php"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
print("<P>");
echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

   
?>