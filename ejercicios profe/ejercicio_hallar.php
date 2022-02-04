<?php 

  #hallar el numero mayor de 3 numeros digitados 

  $numero1 = 2500; 
  $numero2 = 1598; 
  $numero3 = 59;

  if( $numero1 > $numero2){
      if($numero1 > $numero3){
        echo'El numero :' . $numero1 . ' es el Mayor'; 
      }
      else {
          echo 'Él numero : ' . $numero3 . 'es Mayor';
      }
      }
    else{
        if($numero2 > $numero3){
            echo 'El numero :  ' . $numero2 . 'es el Mayor ';
    }else{
        echo 'numero'. $numero3 . ' es Mayor';
    }
    }
  
  
  
  
  
  
  
  
  ?> 