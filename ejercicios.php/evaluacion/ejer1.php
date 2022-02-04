<?php
$nombre=$_REQUEST["nombre"];
$num=$_REQUEST["numero"];
$color=$_REQUEST["color"];
$suma=0;

echo "<fieldset>";
if ($num<=20) {
    echo"<h1>RESULTADOS DEL JUEGO</h1><p>";
    echo"Numero digitado: $num <p>";
    
echo"Serie: <br>";
    switch (true) {
        case $color=='1':
            for ($i=0; $i < $num; $i+=2) { 
                echo$i;
                $suma=$suma+$i;         
            }
            echo"<p> La suma de pares de la serie anterior es: $suma";
            break;
        case $color=='2':
            for ($i=1; $i < $num; $i+=1) { 
                if ($i%2==1) {
                    echo$i;
                    $suma=$suma+$i;
                    
                }       
            }
            echo"<p>La suma de impares de la serie anterior es: $suma";
            break;
        default:
            for ($i=1; $i < $num; $i++) { 
                if ($i%5==0) {
                    echo$i."<br>";
                    $suma=$suma+$i;
                    
                }       
            }
            echo"<p>La suma los multiplos de 5 de la serie anterior es: $suma"; 
            break;
    }
    $num_A= rand(1,100);
    echo"<p> Numero aleatorio: $num_A <p>";
    $total=$num_A+($suma*$num);
    if ($total<100) {
        echo"En esta oportunidad perdiste $nombre has ganado un total de $total puntos";
    }else {
        echo"Felicitaciones $nombre , has ganado un total de $total puntos";
    }
}else {
    echo"Por favor digite un numero valido para poder jugar";
}
echo"</fieldset>";
    echo '<p><a href="http://localhost/eleny/evidencia/formulario1.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'
?>
