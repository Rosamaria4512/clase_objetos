<?php
$automovil1 = (object) ["marca"=>"toyota" ,"modelo"=>"corolla"];
$automovil2 = (object) ["marca"=>"hunday" ,"modelo"=>"accent vision"];

function mostrar($automovil){

    echo"<p>hola! soy un $automovil-> marca, modelo $automovil->modelo</p>";

}

mostrar ($automovil1);
mostrar ($automovil2);



?>