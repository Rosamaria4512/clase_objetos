<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO </h1>
    <h2>TABLAS DE MULTIPLICAR</h2>
    <p></p>
    <h3>Ingrese: </h3>
    <br>
    <form action="ejercicio_13.php" method = "get">
        <label>Tabla que desea mostrar: </label>
        <input type="number" min="1" max="100" name ="tabla" ><p>
        <label>Maximo multiplicador: </label>
        <input type="number" name ="num" ><p>
        <input type="submit" name="btn_enviar" value="Enviar">

    </form>
</body>
</html>