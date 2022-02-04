<?php
if(isset($_POST["btn_enviar"])) {
}
print("LIQUIDACION DEL EMPLEADO")."<P>";
$nombre = $_POST["nombre"];
$horas = $_POST["horas_trabajadas"];
$valor_hora = $_POST["valor_hora"];

if($horas <=136){
    $horas_dobles = $horas - 120;
    echo 'usted tiene '.$horas_dobles.'horas extra';
    $valor_doble = ($valor_hora * $horas_dobles)*2 ;
    print("<P>");
    
    echo 'el valor de sus horas es:'.$valor_doble;
    print("<P>");
  }
 
  elseif($horas >=137){
    $horas_triples = $horas - 120;
    echo 'usted tiene '.$horas_triples.'horas extra';
    $valor_triple = ($valor_hora * $horas_triples)*3 ;
    print("<P>");
    
    echo 'el valor de sus horas es:'.$total ;
    print("<P>");

  }
     
  elseif($horas<=120 ){
    $valor = ($valor_hora * $horas) ;

    print("<P>");
    echo 'usted no tiene horas extra:';
    echo 'el valor de sus horas es:'.$valor;
    print("<P>");

    
  }




    




    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20EINER/07_FORMULARIO_EJERCICIO_07.php"><input type="submit" name="btn_VOLVER" value="VOLVER"></a>';
    print("<P>");
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

?>