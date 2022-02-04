<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FOMULARIO EMPLEADOS </h1>
    <br>
    <p></p>
    <h3>Señor usuario Ingrese los siguientes datos: </h3>
    <br>
    <form action="ejercicio2.php" method = "get">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br>
        <label>Horas trabajadas: </label>
        <input type="num" name="horas"><br>
        <label>Pago por hora: </label>
        <input type="num" name="pago_h"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>