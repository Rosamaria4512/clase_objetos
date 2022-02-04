<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio_01.php" method="POST">
        <h3>FORMULARIO DE EMPLEADOS</h3>
        <label for="">Nombre del vendedor : </label><br>
        <input type="text" name="nombres"><br>
        <label for="">Cargo: </label><br>
        <input type="text" name="cargo"><br>
        <label for="">Valor de las ventas: </label><br>
        <input type="number" name="valor_ventas"><br>
        
        <input type="submit" name="btn_enviar" value="Ejecutar">
    </form>
</body>

</html>