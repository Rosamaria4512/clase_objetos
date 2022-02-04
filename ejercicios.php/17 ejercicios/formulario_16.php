<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FABRICA DE PAÑALES</h1>
    <h2>FORMULARIO DE CAPTURA </h2>

    <p>Ingrese:</p>

    <form action="ejercicio_16.php" method = "get">
        <label>Nombre: </label>
        <input type="text" name="nombre"><p>
        <label>Produccion por dia: </label>
        <input type="num" name="produccion"><p>
        <label>Numero Semanas : </label>
        <input type="num" name="semana"><p>

        <input type="submit" name="btn_enviar" value="Enviar">

    </form>
</body>
</html>