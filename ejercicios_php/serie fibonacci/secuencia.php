<?php
#while
$a = 0;
$contador =0;
while($a < 5) {
$a = $a+1;
$contador = $contador+$a;
echo $a."<p>";

}
echo $contador;


echo "<br><br>"
?>


<?php
#for
 for ($i=0; $i < 10; $i++) {
     echo $i."<p>";

 }
 echo "<br><br>"
?>

<?php
#do while
$i= 0;
do {
    $i =$i+1;
    echo $i. "<p>";
} while ($i <= 9);

?>