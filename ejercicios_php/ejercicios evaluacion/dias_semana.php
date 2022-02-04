<?php
$num = $_REQUEST ["num"];

switch (true) {
    case $num==1;
        echo "el numero ". $num. "corresponde a lunes";         
        break;
    case $num==2;
        echo "el numero ". $num . "corresponde a martes";        
        break;
    case $num==3;
        echo "el numero ". $num . "corresponde a miercoles";        
        break;
    case $num==4;
        echo "el numero ". $num . "corresponde a jueves";  
        break;   
    case $num==5;
        echo "el numero ". $num . "corresponde a viernes";        
        break;
    case $num==6;
        echo "el numero ". $num . "corresponde a sabado";        
        break;
    case $num==7;
        echo "el numero ". $num . "corresponde a domingo";        # code...
        break;
            
        
    default:
        echo "numero no valido" . $num;
        break;
}

?>