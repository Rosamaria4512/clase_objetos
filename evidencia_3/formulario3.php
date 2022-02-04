<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FOMULARIO TRABAJADOR</h1>
    <br>
    <p></p>
    <h3>Señor usuario Ingrese los siguientes datos: </h3>
    <br>
    <form action="ejercicio3.php" method = "get">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br>
        <label>Salario mensual: </label>
        <input type="num" name="salario"><br>
        <label>Antiguedad en años: </label>
        <input type="num" name="Antiguedad"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>