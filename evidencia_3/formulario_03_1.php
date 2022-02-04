<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio_03.php" method="POST">
        <h3>Reparto Anual de utilidades</h3>
        <h3>Hola, digita los siguientes datos</h3>
        <label for="">Nombres: </label><br>
        <input type="text" name="nombres"><br>
        <label for="">Digite su salario: </label><br>
        <input type="number" name="salario"><br>
        <label for="">Digite tiempo laborado en anios: </label><br>
        <input type="number" name="anios_l"><br>
        <label for="">Digite tiempo laborado en meses: </label><br>
        <input type="number" name="meses_l"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">
    </form>
</body>

</html>