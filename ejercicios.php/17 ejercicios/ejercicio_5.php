<?php



$a=$_REQUEST["1"];
$b=$_REQUEST["2"];
$c=$_REQUEST["3"];
$d=$_REQUEST["4"];
$e=$_REQUEST["5"];
$total = 0;

  if ($a >=50){
   $total=$total+1;
    
  }else{
    $total+0;
  }if ($b >=50){
    $total=$total+1;
     
   }else{
     $total+0;
   }if ($c >=50){
    $total=$total+1;
     
   }else{
     $total+0;
   }if ($d >=50){
    $total=$total+1;
     
   }else{
     $total+0;
   }if ($e >=50){
    $total=$total+1;
     
   }else{
     $total+0;
   }

   echo"<h2>"." Empleados mayores de 50 años:";
    echo"<h1>". $total." Empleados"; "<br>";
  
    
     
  


    
    

    





?>