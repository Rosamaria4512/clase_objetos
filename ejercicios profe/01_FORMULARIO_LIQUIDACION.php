<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de captura de numeros</title>
</head>
<body>
    

<h1> LIQUIDACION DEL EMPLEADO </h1>
<H2>FORMULARIO DE CAPTURA</H2>
<form action=""></form>
<form action="01_LIQUIDACION.php" method="get">
<label>Digite el nombre del empleado:&nbsp;&nbsp;</label>
<input type="text" name="nombre"><p>
<label>Digite el cargo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
<input type="text" name="cargo"><p>
<label>Digite el salario del empleado:&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="number" name="salario"><p>
<input type="submit" name="btn_enviar" value="EJECUTAR">

</form>

<br>

</body>
</html>

<?php

    
    echo '<a href="http://localhost/ADSI EINER/MENU.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

?>