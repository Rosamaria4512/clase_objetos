!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de captura de numeros</title>
</head>
<body>
    

<h1> HALLAR NUMERO MAYOR </h1>
<H2>FORMULARIO DE CAPTURA</H2>
<form action="ejercicio_hallar2.php" method="get">
<label>numero 1:&nbsp;&nbsp;</label>
<input type="number" name="numero1"><p>
<label>numero 2 : </label>
<input type="number" name="numero2"><p>
<label>numero 3:;</label>
<input type="number" name="numero3"><p>
<input type="submit" name="btn_enviar" value="EJECUTAR">

</form>

<br>

</body>
</html>

<?php

    
    echo '<a href="http://localhost/ADSI2338368%20DAYANA_EINER/formulariohallar.php"><input type="submit" name="btn_MENU" value="MENU"></a>';

?>