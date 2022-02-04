<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hallar una operacion artimetica +-*/</h2>
    <form method="post" action="23_procesarfunciones.php">
        <label>Digite la cantidad 1: </label><br>
        <input type="number" name="numero1"><br><br>
        <label>Digite la cantidad 2: </label><br>
        <input type="number" name="numero2"><br><br>
        <label>Seleccione una unidad:</label>
        <p>
            <select name="operacion_aritmetica">
                <option value="1">Suma</option>
                <option value="2">Resta</option>
                <option value="3">Multiplicación</option>
                <option value="4">División</option>
            </select>

            <button type="submit" name="btn_enviar">Enviar</button>

    </form>
</body>

</html>