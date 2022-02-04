<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hallar la altura dada en pulgadas y pies</h2>
    <form method="post" action="17_ejerpiespulga.php">
        <label>Digite la altura en metros: </label><br>
        <input type="number" name="altura"><br><br>

        <label>Seleccione una unidad:</label><p>
        <select name="unidad">
            <option value="1">Centimetros</option>
            <option value="2">Kilometros</option>
            <option value="3">Pulgadas</option>
            <option value="4">Pies</option>
        </select>

        <button type="submit" name="btn_enviar">Enviar</button>

    </form>
</body>

</html>